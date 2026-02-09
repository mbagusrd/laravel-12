<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

$path = parse_url(config('app.url'), PHP_URL_PATH) ?? '';

Livewire::setUpdateRoute(function ($handle) use ($path) {
    return Route::post($path . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) use ($path) {
    return Route::get($path . '/livewire/livewire.js', $handle);
});

Route::get('/', function () {
    return view('welcome');
});
