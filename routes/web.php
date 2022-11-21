<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    $readme = file_get_contents(public_path('README.md'));
    $content = Str::markdown($readme);

    return view('welcome', compact('content'));
});
