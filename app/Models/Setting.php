<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'subhead','content', 'team_name', 'facebook', 'whatsapp', 'email', 'title', 'about', 'copyright'
    ];

}
