<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');    
})->name('about');

Route::get('/features', function () {
    return view('features');    
})->name('features');

Route::get('/class', function () {
    return view('class');    
})->name('class');

Route::get('/contact', function () {
    return view('contact');    
})->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/localization', function () {
    $lang = request()->lang;
    
    session()->put('lang', $lang);

    return back();

})->name('localization');
