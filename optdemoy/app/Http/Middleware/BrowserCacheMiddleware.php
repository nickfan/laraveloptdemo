<?php

namespace App\Http\Middleware;

use Closure;

class BrowserCacheMiddleware
{
    protected function parseOptions($optionContent=''){
        $cacheTtl = 0;
        $cachePublic = true;
        $useEtag = true;
        if(strlen($optionContent)>0){
            $cacheTtlToken = '0';
            $cachePublicToken = 'private';
            $useEtagToken = 'on';
            $optionSegments = array_map('strtolower',explode('|',$optionContent));
            $optionSegmentsCount = count($optionSegments);
            switch ($optionSegmentsCount){
                case 1:
                    $cacheTtlToken = head($optionSegments);
                    break;
                case 2:
                    list($cacheTtlToken,$cachePublicToken) = $optionSegments;
                    break;
                case 3:
                default:
                    list($cacheTtlToken,$cachePublicToken,$useEtagToken) = $optionSegments;
                    break;
            }
            if(is_null($cacheTtlToken) || $cacheTtlToken==='' || $cacheTtlToken==='null' || $cacheTtlToken==='off' || $cacheTtlToken==='false'){
                $cacheTtl = null;
            }else{
                $cacheTtl = (int) $cacheTtlToken;
            }
            if($cachePublicToken==='public' || $cachePublicToken==='true'){
                $cachePublic = true;
            }else{
                $cachePublic = false;
            }
            if($useEtagToken==='on' || $useEtagToken==='true'){
                $useEtag = true;
            }else{
                $useEtag = false;
            }
        }
        return [$cacheTtl,$cachePublic,$useEtag];
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$optionContent='')
    {
        // Get response
        /** @var \Symfony\Component\HttpFoundation\Response|\Illuminate\Contracts\Routing\ResponseFactory $response */
        $response = $next($request);

        if (!$request->isMethodCacheable()) {
            return $response;
        }

        list($cacheTtl,$cachePublic,$useEtag) = $this->parseOptions($optionContent);
        if($useEtag==true){
//            $contentEtag = $response->headers->get('Content-ETag');
            $contentEtag = $response->getEtag();
            // Generate Etag
            empty($contentEtag) && $contentEtag = md5($response->getContent());
            $requestEtags = str_replace('"', '', $request->getETags());
            if(!empty($requestEtags)){
                if(in_array($contentEtag, $requestEtags) || in_array('W/'.$contentEtag, $requestEtags) || in_array('*', $requestEtags)){
                    return $response->setNotModified();
                }
            }
            // Set Etag
            $response->setEtag($contentEtag);
        }
        if(!is_null($cacheTtl)){
            if($cachePublic==true){
                $response->setPublic();
            }else{
                $response->setPrivate();
            }
            $response->setMaxAge($cacheTtl);
        }
        // Send response
        return $response;
    }
}
