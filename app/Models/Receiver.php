<?php

namespace App\Models;

use App\Observers\ReceieverObserver;
use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{

    protected $table = 'receivers';
    public $timestamps = true;
    protected $fillable = array('full_name', 'email', 'phone', 'address', 'national_number', 'blood_type', 'files', 'description', 'status', 'hospital_id', 'donor_id', 'organ_id');
    protected $hidden = array('address', 'donor_id');

    public function organ()
    {
        return $this->belongsTo('App\Models\Organ', 'organ_id');
    }

    public function hospital()
    {
        return $this->belongsTo('App\Models\User', 'hospital_id');
    }

    public function donor()
    {
        return $this->belongsTo('App\Models\Donor', 'donor_id');
    }



}
