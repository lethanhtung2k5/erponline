<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeEmployee extends Model
{
	use SoftDeletes;

    protected $table = 'type_employees';
    
    protected $primaryKey = 'id';
    
    protected $guarded = ['id'];

}
