<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Hash;

class RegisterController extends Controller
{

    public function create()
    {
        return view ('profile.create');
    }
    public function store (Request $request)
    {
        $input=$request->all();
        User::create ([
            'name'=> $input['name'],
            'email'=> $input['email'],
            'password'=> Hash::make( $input['password'])
        ]);
        return view('accueil');
    }
}
