<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function myAccount()
    {
        $token = Auth::user()->createToken('my-app-token')->plainTextToken;

        return view('myaccount')->with('token', $token);
    }

}
