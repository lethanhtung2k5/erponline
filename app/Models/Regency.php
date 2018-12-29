<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    protected $table = 'regencies';
    
    protected $primaryKey = 'id';
    
    protected $guarded = ['id'];
}
