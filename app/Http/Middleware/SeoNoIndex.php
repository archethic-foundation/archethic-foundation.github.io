<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SeoNoIndex
{
    /** @var array<string> */
    private array $noIndexPaths = [
        'privacy',
        'terms',
        'privacy-policy-archethic',
        'privacy-policy-wallet',
        'terms-of-use-defi',
        '404',
        'helix',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (in_array($request->path(), $this->noIndexPaths, true)) {
            $response->headers->set('X-Robots-Tag', 'noindex, nofollow');
        }

        return $response;
    }
}
