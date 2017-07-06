<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
//        \App\Http\Middleware\NoSessionMiddleware::class,
//        \Barryvdh\HttpCache\Middleware\CacheRequests::class,
//        \Barryvdh\HttpCache\Middleware\ParseEsi::class,
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \App\Http\Middleware\StartSession::class,
        \App\Http\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\AppVerifyCsrfToken::class,
//        \Illuminate\Session\Middleware\StartSession::class,
//        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
//        \App\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
//        'nohttpcache' => \App\Http\Middleware\NoHttpCache::class,
        'browsercache' => \App\Http\Middleware\BrowserCacheMiddleware::class,
//        'ttl' => \Barryvdh\HttpCache\Middleware\SetTtl::class,
        'htmlmin' => \GrahamCampbell\HTMLMin\Http\Middleware\MinifyMiddleware::class,
    ];
}
