<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function home() {

        $showTime = true;
        return view('welcome', [
            'name'=> "Andy",
            'showTime' => $showTime
        ]);
    }

    public function store(Request $request){
        $validate = $request->validate([
            "email" => ['required', 'email'],
            "fullname" => ['required', 'max:50'],
            "phoneNumber" => ['required', 'starts_with:+229,+1,+228']
        ]);

        $data = Contact::create([
            "email" => $validate['email'],
            "full_name" => $validate['fullname'],
            "phone_number" => $validate['phoneNumber']
        ]);

        dd($data);
    }

    
}
