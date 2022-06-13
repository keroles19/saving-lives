<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obligation extends Model 
{

    protected $table = 'obligations';
    public $timestamps = true;
    protected $fillable = array('full_name', 'national_number', 'obligation_accept', 'number');

}