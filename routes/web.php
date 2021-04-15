<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/films', function () {
    return view('films');
})->name('films');

Route::get('/show', function () {
    return view('show');
})->name('show');

Route::get('/rating', function () {
    return view('rating');
})->name('rating');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all/{id}',
    [\App\Http\Controllers\ContactController::class,
        'showOneMessage'])->name('contact-data-one');

Route::get('/contact/all/{id}/update',
    [\App\Http\Controllers\ContactController::class,
        'updateMessage'])->name('contact-update');

Route::post('/contact/all/{id}/update',
    [\App\Http\Controllers\ContactController::class,
        'updateMessageSubmit'])->name('contact-update-submit');


Route::get('/contact/all/{id}/delete',
    [\App\Http\Controllers\ContactController::class,
        'deleteMessage'])->name('contact-delete');

Route::get('/contact/all', [\App\Http\Controllers\ContactController::class, 'allData'])->name('contact-data');


Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class, 'submit'])->name('contact-form');
