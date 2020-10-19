<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone',
        'document_number', 'password', 'api_token',
    ];

    protected $hidden = [
        'password',
        'api_token',
    ];
    public function passengers()
    {
        return $this->hasMany('App\Models\Passenger', 'document_number', 'document_number');
    }
}
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

