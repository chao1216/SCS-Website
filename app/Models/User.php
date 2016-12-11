<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','linkedInLink',
        'githubProfileLink','biography','picturePath'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Many-To-Many relationship b/w users and projects
     * Users presumably have worked on multiple projects
     * So get the projects that this user has worked on
     *
     * Docs: https://laravel.com/docs/5.3/eloquent-relationships#many-to-many
     * Args: (Model, Pivot Table, This Model's id, Model id of table joining with)
     */
    public function projects()
    {
       return $this->belongsToMany('App\Models\Projects\Project','projects_users','project_id','user_id');
    }
}
