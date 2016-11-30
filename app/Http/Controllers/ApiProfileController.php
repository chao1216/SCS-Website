<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class ApiProfileController extends Controller
{
    public function show()
    {
        // return JSON info of authenticated user
        return User::find(Auth::id());
    }
}
