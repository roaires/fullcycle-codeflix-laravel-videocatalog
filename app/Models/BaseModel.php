<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use SoftDeletes,Traits\Uuid;

    protected $dates = ['deleted_at'];
    protected $casts = [
        'id' => 'string'
    ];  
     
    public $incrementing = false;

}
