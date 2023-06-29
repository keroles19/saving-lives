<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organ extends Model
{
    use HasFactory;

    protected $table = 'organs';
    public $timestamps = true;
    protected $fillable = array('organ_name');

    public function donors()
    {
        return $this->hasMany('App\Models\Donor', 'organ_id');
    }

    public function receivers()
    {
        return $this->hasMany('App\Models\Receiver', 'organ_id');
    }

}
