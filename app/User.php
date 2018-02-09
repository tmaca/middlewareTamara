<?php

namespace App;

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

    //tamara
    protected $fillable = [
        'name', 'edad',
    ];
    //tamara porque le hemos quitado el timestamps y da error
    public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    //tamara > no necesitamos lo de dentro
    protected $hidden = [
        //'password', 'remember_token',
    ];
}
