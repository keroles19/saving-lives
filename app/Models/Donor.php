<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model 
{

    protected $table = 'donors';
    public $timestamps = true;
    protected $fillable = array('full_name', 'email', 'phone', 'address', 'password', 'national_number', 'blood_type', 'description', 'files', 'status', 'organ_id', 'hospital_id');
    protected $hidden = array('password');

    public function organ()
    {
        return $this->belongsTo('App\Models\Organ', 'organ_id');
    }

    public function hospital()
    {
        return $this->belongsTo('App\Models\User', 'hospital_id');
    }

    public function receiver()
    {
        return $this->hasOne('App\Models\Receiver', 'donor_id');
    }

}