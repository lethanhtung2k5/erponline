<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeEmployee extends Model
{
    protected $table = 'type_employees';
    
    protected $primaryKey = 'id';
    
    protected $guarded = ['id'];
}
