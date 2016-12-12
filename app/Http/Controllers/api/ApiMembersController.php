<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class ApiMembersController extends Controller
{
    /**
     * TODO: write test for this function
     * @param null $id
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function show($id = null)
    {
        return $id == null ? User::all() : User::find($id);
    }
}