<?php

use App\Http\Middleware\SeoNoIndex;
use Illuminate\Support\Facades\Route;

// Using ->get() method from Laravel's testing
test('old urls redirect to new urls', function (string $oldUrl, string $newUrl) {
    $response = $this->get($oldUrl);

    $response->assertRedirect($newUrl)
        ->assertStatus(301);
})->with([
    'homepage redirect' => ['/index.html', '/'],
    'wallet redirect' => ['/wallet.html', '/hot-wallet'],
    'privacy redirect' => ['/privacy.html', '/privacy'],
    'terms redirect' => ['/terms.html', '/terms'],
]);

test('noindex pages have correct headers', function (string $url) {
    // Create a basic route for testing
    Route::get($url, function () {
        return response('Test Content');
    })->middleware([SeoNoIndex::class]);

    $response = $this->get($url);

    expect($response->headers->get('X-Robots-Tag'))->toBe('noindex, nofollow');
})->with([
    'privacy page' => '/privacy',
    'terms page' => '/terms',
    'helix page' => '/helix',
    'privacy archethic' => '/privacy-policy-archethic',
    'privacy wallet' => '/privacy-policy-wallet',
]);

test('public pages are indexable', function (string $url) {
    $response = $this->get($url);

    $response->assertOk()
        ->assertHeaderMissing('X-Robots-Tag');
})->with([
    'homepage' => '/',
    'hot wallet' => '/hot-wallet',
    'token page' => '/uco-token',
]);

test('pages have correct seo metadata', function (string $url, string $title, string $description) {
    $response = $this->get($url);

    $response->assertOk()
        ->assertSee($title, false)
        ->assertSee($description, false);
})->with([
    'homepage meta' => [
        '/',
        'Archethic (UCO) – Biometric Cold Wallet Unlocking Proof of Humanity and Decentralized Identity',
        'Discover Archethic (UCO), the blockchain platform revolutionizing security and identity.'
    ],
    'hot wallet meta' => [
        '/hot-wallet',
        'Download Archethic Wallet - iOS, Android, Browser extension',
        'Download and install Archethic Hot Wallet: Secure, decentralized token storage'
    ],
]);

test('asset redirects work correctly', function (string $oldUrl, string $newUrl) {
    $response = $this->get($oldUrl);

    $response->assertRedirect($newUrl)
        ->assertStatus(301);
})->with([
    'favicon redirect' => ['/favicon.ico', '/assets/img/favicon.ico'],
    'logo redirect' => ['/Ae-flat-white.png', '/assets/img/Ae-flat-white.png'],
    'polygon image' => ['/polygon.529bc018.png', '/assets/img/exchanges/polygon.png'],
]);

test('canonical urls are correct', function (string $url) {
    $this->withoutExceptionHandling();

    $response = $this->get($url);
    $content = $response->getContent();

    // Use the same URL generation as in views
    $expectedCanonical = "rel=\"canonical\" href=\"" . url(ltrim($url, '/')) . "\"";

    expect($response->status())->toBe(200)
        ->and($content)->toContain($expectedCanonical);
})->with([
    'homepage canonical' => '/',
    'hot wallet canonical' => '/hot-wallet',
]);