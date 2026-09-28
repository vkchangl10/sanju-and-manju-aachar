<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/our-story', function () {
    return Inertia::render('OurStory');
});

Route::get('/pickles', function () {
    return Inertia::render('Pickles');
});

Route::get('/our-process', function () {
    return Inertia::render('Process');
});

Route::get('/gifting', function () {
    return Inertia::render('Gifting');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::get('/legal/{slug?}', function (?string $slug = null) {
    return Inertia::render('Legal', ['slug' => $slug]);
});

Route::fallback(function () {
    return Inertia::render('NotFound');
});
