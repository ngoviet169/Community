<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use Notifiable;

    protected $table = "member_all";

    protected $guarded = "member_all";

    protected $primaryKey = 'system_id';

    public $timestamps = false;

    protected $fillable = [
        'system_id', 'login_id', 'login_pass',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'login_pass', 'remember_token'
    ];
}
