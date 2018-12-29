<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeCustomer extends Model
{
    protected $table = 'type_customers';
    
    protected $primaryKey = 'id';
    
    protected $guarded = ['id'];
}
