<?php

namespace App\Http\Controllers\api;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ApiProfileController extends Controller
{
    public function show($id = null)
    {
        // return JSON info of authenticated user
        return User::find(Auth::id());
    }

    public function update(Request $request)
    {
        $user = User::find($request->input('id'));

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->biography = $request->input('biography');
        $user->linkedInLink = $request->input('linkedInLink');
        $user->githubProfileLink = $request->input('githubProfileLink');
        $user->save();

        return "User updated successfully";
    }
}
