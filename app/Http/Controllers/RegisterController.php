<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function register(Request $request){
        return view('auth.register');
    }

    public function createAccount(Request $request){
        
        $validated = $request->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email'],
            'password' => ['required', Password::min(8)]
        ]);

        $user = User::create($validated);
        
        return redirect("/register")->with('success', "Le compte a été créé avec succès");
        
    }
}
