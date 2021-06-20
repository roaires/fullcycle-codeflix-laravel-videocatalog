<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends BaseModel
{    
    protected $fillable = ['name', 'is_active'];      
}
