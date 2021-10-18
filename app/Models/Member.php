<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    function compnyData()
    {
        return $this->hasOne('App\Models\Compny');
    }
    function getdevice()
    {
        return $this->hasMany('App\Models\Compny');
    }
}
