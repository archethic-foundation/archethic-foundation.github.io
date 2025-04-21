<?php

use App\Http\Middleware\SeoNoIndex;
use Illuminate\Support\Facades\Route;

Route::middleware([SeoNoIndex::class])->group(function () {

    Route::get('/', function () {
        return view('welcome', [
            'participantCount' => 538,
        ]);
    })->name('welcome');

    Route::get('/helix', function () {
        return view('helix');
    });

    Route::get('/hot-wallet', function () {
        return view('hot-wallet');
    })->name('hot-wallet');

    Route::get('/uco-token', function () {
        return view('uco-token');
    })->name('uco-token');

    Route::get('/technology', function () {
        return view('technology');
    })->name('technology');

    Route::get('/ecosystem', function () {
        return view('ecosystem', [
            'participantCount' => 538,
        ]);
    })->name('ecosystem');

    Route::get('/about-us', function () {
        return view('about-us', [
            'participantCount' => 538,
        ]);
    })->name('about-us');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/terms', function () {
        return view('terms');
    })->name('terms');

    Route::get('/privacy', function () {
        return view('privacy');
    })->name('privacy');

    Route::get('/privacy-policy-archethic', function () {
        return view('privacy-policy-archethic');
    })->name('privacy-policy-archethic');

    Route::get('/privacy-policy-wallet', function () {
        return view('privacy-policy-wallet');
    })->name('privacy-policy-wallet');

    Route::get('/terms-of-use-defi', function () {
        return view('terms-of-use-defi');
    })->name('terms-of-use-defi');

    Route::get('/terms-of-service', function () {
        return view('terms-of-service');
    })->name('terms-of-service');

    Route::get('/aewallet-dispatcher', function () {
        return view('aewallet-dispatcher');
    })->name('aewallet-dispatcher');

    Route::get('/job-offer/blockchain-developer', function () {
        return view('blockchain-developer');
    })->name('job-offer.blockchain-developer');
});

// // Handle static assets
// Route::get('/assets/{path}', function ($path) {
//    return redirect("/assets/$path", 301);
// })->where('path', '.*');

// SEO
// Sitemap.xml
use Illuminate\Support\Facades\Response;

Route::get('/sitemap.xml', function () {
    $pages = [
        '/' => '1.0',
        '/hot-wallet' => '0.8',
        '/uco-token' => '0.8',
        '/technology' => '0.8',
        '/ecosystem' => '0.8',
        '/about-us' => '0.8',
        '/contact' => '0.7',
    ];

    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
    $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    foreach ($pages as $path => $priority) {
        $sitemap .= '<url>';
        $sitemap .= '<loc>'.url($path).'</loc>';
        $sitemap .= '<lastmod>'.date('Y-m-d').'</lastmod>';
        $sitemap .= '<changefreq>weekly</changefreq>';
        $sitemap .= "<priority>{$priority}</priority>";
        $sitemap .= '</url>';
    }

    $sitemap .= '</urlset>';

    return Response::make($sitemap, 200, ['Content-Type' => 'application/xml']);
});
