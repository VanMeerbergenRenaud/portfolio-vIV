<?php

use App\Http\Middleware\NoStoreForLivewirePages;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Mechanisms\HandleComponents\CorruptComponentPayloadException;

beforeEach(function () {
    RateLimiter::clear('livewire-update:127.0.0.1');
});

test('non-livewire updates without snapshot are blocked with 400', function () {
    $response = $this->postJson('/livewire/update', []);
    $response->assertStatus(400);
    $response->assertJson(['message' => 'Invalid Livewire snapshot.']);
});

test('livewire updates with an empty or truncated snapshot are blocked with 400', function () {
    $responseEmpty = $this->postJson('/livewire/update', ['snapshot' => '']);
    $responseEmpty->assertStatus(400);
    $responseEmpty->assertJson(['message' => 'Invalid Livewire snapshot.']);

    $responseTruncated = $this->postJson('/livewire/update', ['snapshot' => 'too_short']);
    $responseTruncated->assertStatus(400);
    $responseTruncated->assertJson(['message' => 'Truncated Livewire snapshot.']);
});

test('livewire updates with valid length snapshot pass middleware validation', function () {
    $response = $this->postJson('/livewire/update', [
        'snapshot' => str_repeat('x', 50),
    ]);

    expect($response->status())->not->toBe(400);
});

test('livewire updates are rate limited after 60 requests', function () {
    for ($i = 0; $i < 60; $i++) {
        $response = $this->postJson('/livewire/update', ['snapshot' => str_repeat('x', 50)]);
        // Assert we are not rate limited yet
        expect($response->status())->not->toBe(429);
    }

    // The 61st request should be rate limited
    $response = $this->postJson('/livewire/update', ['snapshot' => str_repeat('x', 50)]);
    $response->assertStatus(429);
    $response->assertJsonPath('message', 'Too many requests.');
});

test('livewire pages include no-store caching headers', function () {
    Route::get('/_test_caching_headers', function () {
        return 'OK';
    })->middleware(NoStoreForLivewirePages::class);

    $response = $this->get('/_test_caching_headers');
    $cacheControl = $response->headers->get('Cache-Control');
    expect($cacheControl)->toContain('no-store');
    expect($cacheControl)->toContain('no-cache');
    expect($cacheControl)->toContain('must-revalidate');
    expect($cacheControl)->toContain('max-age=0');
    $response->assertHeader('Pragma', 'no-cache');
});

test('global exception handler converts CorruptComponentPayloadException to 400 response', function () {
    Route::get('/_test_corrupt_payload_exception', function () {
        throw new CorruptComponentPayloadException('some-component', []);
    });

    $response = $this->get('/_test_corrupt_payload_exception');
    $response->assertStatus(400);
    $response->assertJson(['message' => 'Invalid component payload.']);
});
