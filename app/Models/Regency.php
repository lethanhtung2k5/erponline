<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Regency extends Model
{
	use SoftDeletes;

    protected $table = 'regencies';
    
    protected $primaryKey = 'id';
    
    protected $guarded = ['id'];

}
