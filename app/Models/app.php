<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class app extends Model
{
    use HasFactory;
    protected $guarded = [];



    public  function catogeryapp()
    {
       return  $this->belongsTo(catogeryapp::class,'catogeryapp_id');
    }
}
