<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    use HasFactory;
    protected $table = 'articles';
    public $timestamps = true;
    protected $fillable = array('title', 'description', 'image', 'status');

}
