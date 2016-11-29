<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function show($id = null)
    {
        return $id == null ? User::all() : User::find($id);
    }
}
