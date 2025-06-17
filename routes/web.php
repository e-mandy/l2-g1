<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/home', [StudentController::class, 'home']);

Route::get('/contact', function(){
    $contacts = Contact::all();
    return view('contact', [
        "contacts" => $contacts
    ]);
})->name('contact');

Route::post('/contact', [StudentController::class, 'store'])->name('contact');

Route::get('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/register', [RegisterController::class, 'createAccount'])->name('register');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/login', [LoginController::class, 'authenticated'])->name('login');
