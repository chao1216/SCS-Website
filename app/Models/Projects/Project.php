<?php

namespace App\Models\Projects;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // don't need to define $table reference b/c the class
    // name is used to find the right table
    // https://laravel.com/docs/5.3/eloquent#defining-models
    protected $fillable = ['name', 'description', 'githubProfileLink',
                            'linkedInLink'];


    /**
     * Each project has multiple uploads (pics/videos)
     * that go with/describe that project
     *
     * Docs: https://laravel.com/docs/5.3/eloquent-relationships#one-to-many
     *
     * Args: (Model you have many of, foreign key on passed model's table referencing this model's table,
     *       'if this model's table doesn't use id as primary key, add proper name as 3rd arg)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectUploads()
    {
        return $this->hasMany('App\Models\Projects\ProjectUploads','project_id');
    }

    /**
     * Many-To-Many relationship b/w projects and users
     * This project was built by many users/members
     *
     * TODO: figure out how to implement the DB's foreign keys for this relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('\App\Models\User','projects_users','project_id','user_id');
    }
}
