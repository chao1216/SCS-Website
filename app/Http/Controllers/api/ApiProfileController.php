<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use App\Models\Projects\Project;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ApiProfileController extends Controller
{
    public function show($id = null)
    {
        // TODO: decouple the session based laravel authentication by sending auth tokens
        // TODO: https://scotch.io/tutorials/token-based-authentication-for-angularjs-and-laravel-apps
        // return JSON info of authenticated user
        return User::with('projects')->find(Auth::id());
    }

    public function updateProjects($projectId = null) {
        if($projectId != null) {
            $user = User::find(Auth::id());
            if(!$user->projects->contains($projectId))
                $user->projects()->attach($projectId);
            // add else line that tells callee that you tried adding a duplicate
        }
        // reload the user model with updated
        return User::find(Auth::id())->projects;
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
