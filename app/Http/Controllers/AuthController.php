<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = [
            'name' => $request['name'],
            'password' => $request['password'],
        ];


        if (Auth::attempt($credentials)) {
            return redirect('welcome');
            //   return redirect()
        }

        return 'Failure';


    }
}
