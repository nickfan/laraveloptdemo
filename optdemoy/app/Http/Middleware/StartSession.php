<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Session\Middleware\StartSession as BaseStartSession;

class StartSession extends BaseStartSession
{
    protected $except = [
        '/',
        '/main',
        '/mydata',
        'main',
        'mydata',
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        foreach ($this->except as $except) {
            if ($request->is($except)) {
                config()->set('session.driver', 'array');
                return $next($request);
            }
        }
        return parent::handle($request, $next);
    }
}
