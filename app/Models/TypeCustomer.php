<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeCustomer extends Model
{
	use SoftDeletes;

    protected $table = 'type_customers';
    
    protected $primaryKey = 'id';
    
    protected $guarded = ['id'];
}
