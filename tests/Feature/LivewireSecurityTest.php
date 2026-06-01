<?php

use Illuminate\Support\Facades\RateLimiter;

beforeEach(function () {
    RateLimiter::clear('livewire-update:127.0.0.1');
});

test('non-livewire updates without snapshot are blocked with 400', function () {
    $response = $this->postJson('/livewire/update', []);
    $response->assertStatus(400);
    $response->assertJson(['message' => 'Invalid Livewire request.']);
});

test('livewire updates with snapshot or components pass middleware validation', function () {
    // If it has snapshot, it passes our middleware. Livewire might throw other exceptions (like CorruptComponentPayloadException or similar),
    // but the status code will not be 400 (Invalid Livewire request).
    $response = $this->postJson('/livewire/update', [
        'snapshot' => '{}'
    ]);
    
    expect($response->status())->not->toBe(400);
});

test('livewire updates are rate limited after 60 requests', function () {
    for ($i = 0; $i < 60; $i++) {
        $response = $this->postJson('/livewire/update', ['snapshot' => '{}']);
        // Assert we are not rate limited yet
        expect($response->status())->not->toBe(429);
    }

    // The 61st request should be rate limited
    $response = $this->postJson('/livewire/update', ['snapshot' => '{}']);
    $response->assertStatus(429);
    $response->assertJsonPath('message', 'Too many requests.');
});

test('global exception handler converts CorruptComponentPayloadException to 400 response', function () {
    Route::get('/_test_corrupt_payload_exception', function () {
        throw new \Livewire\Mechanisms\HandleComponents\CorruptComponentPayloadException('some-component', []);
    });

    $response = $this->get('/_test_corrupt_payload_exception');
    $response->assertStatus(400);
    $response->assertJson(['message' => 'Invalid component payload.']);
});

