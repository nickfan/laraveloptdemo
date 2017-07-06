<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 2017/6/20
 * Time: 17:07
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Response;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('browsercache:0|public|on', ['only' => ['index', 'main']]);
//        $this->middleware('browsercache:0|public|on');
    }

    public function index(){
        return view('home');
    }

    public function main(){
        return view('main');
    }

    public function mydata(){
        $resultData = [
            'datetime'=>date('Y-m-d H:i:00'),
            'description'=>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,',
            'total'=>10,
            'data'=>[
                ['id'=>1,'name'=>'myTitle no:1','label'=>'key1'],
                ['id'=>2,'name'=>'myTitle no:2','label'=>'key2'],
                ['id'=>3,'name'=>'myTitle no:3','label'=>'key3'],
                ['id'=>4,'name'=>'myTitle no:4','label'=>'key4'],
                ['id'=>5,'name'=>'myTitle no:5','label'=>'key5'],
                ['id'=>6,'name'=>'myTitle no:6','label'=>'key6'],
                ['id'=>7,'name'=>'myTitle no:7','label'=>'key7'],
                ['id'=>8,'name'=>'myTitle no:8','label'=>'key8'],
                ['id'=>9,'name'=>'myTitle no:9','label'=>'key9'],
                ['id'=>10,'name'=>'myTitle no:10','label'=>'key10'],
            ],
        ];
        $response = Response::json($resultData);
//        return $response;
//        return Response::json($resultData);

        $dataEtag = md5(json_encode($resultData));
//        $dataEtag = null;

        $dataTtl = null;
//        $dataTtl = 0;
        $dataTtl = 10;
//        $dataTtl = 30;
//        $dataTtl = 60;
        $dataPublic = true;

        $httpCacheEntity = [
            'ttl'=>$dataTtl,
            'public'=>$dataPublic,
            'etag'=>$dataEtag,
        ];
        $httpCacheHeaders = [];

        $requestEtags = str_replace('"', '', request()->getETags());
        if(!empty($requestEtags)){
            if(in_array($httpCacheEntity['etag'], $requestEtags) || in_array('W/'.$httpCacheEntity['etag'], $requestEtags) || in_array('*', $requestEtags)){
                return $response->setNotModified();
            }
        }
        if(!empty($httpCacheEntity['etag'])){
            $response->setEtag($httpCacheEntity['etag']);
        }
        if(!is_null($httpCacheEntity['ttl'])){
            if($httpCacheEntity['public']==true){
                $response->setPublic();
            }else{
                $response->setPrivate();
            }
            $response->setMaxAge($httpCacheEntity['ttl']);
        }
        return $response;
    }
}