<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');  // This will be your intro page
});

Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

