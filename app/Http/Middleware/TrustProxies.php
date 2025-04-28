<?php

namespace App\Http\Middleware;

# laravel 8
// use Fideloper\Proxy\TrustProxies as Middleware;
// use Illuminate\Http\Request;

# laravel 10 
use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    # laravel 8
    // protected $headers = Request::HEADER_X_FORWARDED_ALL;

    # laravel 10
    protected $headers =
    Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;
}
