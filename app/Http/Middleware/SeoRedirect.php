<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SeoRedirect
{
    /**
     * URLs that need to be redirected
     */
    /** @var array<string, string> */
    

    private array $redirects = [
        // Main pages redirects
        '/index.html' => '/',
        '/wallet.html' => '/hot-wallet',
        '/privacy.html' => '/privacy',
        '/terms.html' => '/terms',
        '/privacy-policy-archethic.html' => '/privacy-policy-archethic',
        '/privacy-policy-wallet.html' => '/privacy-policy-wallet',
        '/terms-of-use-defi.html' => '/terms-of-use-defi',
        '/404.html' => '/404',
        '/recruitment-bcdev.html' => '/job-offer/blockchain-developer',

        // Assets redirects
        '/icon_32.png' => '/assets/img/icon_32.png',
        '/Ae-flat-white.png' => '/assets/img/Ae-flat-white.png',
        '/favicon.ico' => '/assets/img/favicon.ico',
        '/polygon.529bc018.png' => '/assets/img/exchanges/polygon.png',
        '/bsc.f03c1a39.png' => '/assets/img/exchanges/bsc.png',
        '/team-coo.f8f566e9.webp' => '/assets/img/team/team-coo.webp',
        '/wallet_hot.e5c72284.png' => '/assets/img/mockups/hot-wallet-mockup.png',
        '/flowdesk.f79ea27d.png' => '/assets/img/partners/flowdesk.png',
        '/hacken.50fb7c4d.png' => '/assets/img/partners/hacken.png',
        '/probit.0f4008c9.png' => '/assets/img/partners/probit.png',
        '/team-lead-tech.7dd37779.webp' => '/assets/img/team/team-lead-tech.webp',
        '/generate.7a996275.png' => '/assets/img/partners/generate.png',
        '/beys.733d5304.png' => '/assets/img/partners/beys.png',
        '/ethereum.6a672b30.png' => '/assets/img/exchanges/ethereum.png',
        '/hec.fcfe3338.png' => '/assets/img/partners/hec.png',
        '/polytechnique.4e03fd72.png' => '/assets/img/partners/polytechnique.png',
        '/station-f.021f9cab.png' => '/assets/img/partners/station-f.png',
        '/archethic.c598d950.png' => '/assets/img/exchanges/archethic.png',
        '/cointribune.88725de8.png' => '/assets/img/partners/cointribune.png',
        '/cnrs.9fa7c708.png' => '/assets/img/partners/cnrs.svg',
        '/team-ceo.68f5772f.webp' => '/assets/img/team/team-ceo.webp',
        '/team-lead-rd.b96c95a6.webp' => '/assets/img/team/team-lead-rd.webp',
        '/team-lead-architect.7a92e9f3.webp' => '/assets/img/team/team-lead-architect.webp',
        '/team-cio.61fee0f9.webp' => '/assets/img/team/team-cio.webp',
        '/probit.f90d6d9b.svg' => '/assets/img/exchanges/probit.svg',
        '/mexc.a18e1a45.svg' => '/assets/img/exchanges/mexc.svg',
        '/google.eff6c494.png' => '/assets/img/partners/google.svg',
        '/bpifrance.b305f4a7.png' => '/assets/img/partners/bpifrance.png',
        '/french-tech.01692393.png' => '/assets/img/partners/french-tech.png',
        '/wallet_3d.86c77392.webm' => '/assets/video/wallet_3d.webm',
        '/wallet_hw.de2aae14.png' => '/assets/img/biometric-wallet.png',
    ];

    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $uri = $request->path();

        if (isset($this->redirects['/' . $uri])) {
            return redirect($this->redirects['/' . $uri], Response::HTTP_MOVED_PERMANENTLY);
        }

        return $next($request);
    }
}
