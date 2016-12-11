<?php

namespace App\Models\Projects;

use Illuminate\Database\Eloquent\Model;

class ProjectUploads extends Model
{
    //


    /**
     * Each project upload corresponds to exactly one project
     * Call project to get the corresponding project
     */
    public function project()
    {
       return $this->belongsTo('App\Models\Projects\Project');
    }
}
