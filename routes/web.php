<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(env('PUBLIC_PATH') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(env('APP_URL') . '/livewire/livewire.js', $handle);
});

Route::get('/', function () {
    return view('pages.home');
});
