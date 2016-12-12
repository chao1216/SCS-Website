<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class MembersController extends Controller
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
