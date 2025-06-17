<?php

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

