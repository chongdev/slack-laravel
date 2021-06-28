<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function routeNotificationForSlack($notification)
    {
        // return 'https://hooks.slack.com/services/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';
        return 'https://hooks.slack.com/services/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';
    }
}
