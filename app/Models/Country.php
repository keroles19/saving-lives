<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';
    public $timestamps = true;
    protected $fillable = array('country_name');

    public function hospitals()
    {
        return $this->hasMany('App\Models\Hospital');
    }

    public function donors()
    {
        return $this->hasMany('App\Models\Donor');
    }

    public function revieves()
    {
        return $this->hasMany('App\Models\Receiver');
    }

}
