<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Silvanite\Brandenburg\Traits\HasRoles;

class Hospital extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,  HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'whatsapp',
        'country_id',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function donors()
    {
        return $this->hasMany('App\Models\Donor');
    }

    public function receivers()
    {
        return $this->hasMany('App\Models\Receiver');
    }

}
