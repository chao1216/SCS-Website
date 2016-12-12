<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Projects\Project;

class ProjectsController extends Controller
{
    public function show()
    {
        $projects = Project::all();
        return view('projects.projects', compact('projects'));
    }
}
