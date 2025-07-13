<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
})->name('home');

Route::get('/resume', function(){
    return view('layouts.resume');
})->name('resume');

Route::get('/projects', function(){
    return view('layouts.projects');
})->name('projects');

Route::get('/contact', function(){
    return view('layouts.contact');
})->name('contact');


Route::get('/contact_form', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact_form', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact_form_confirmation', [ContactController::class, 'confirmation'])->name('contact.confirmation');
