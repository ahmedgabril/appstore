<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catogeryapp extends Model
{
    use HasFactory;


    protected $fillable = ['catname','cattype'];
//    public $timestamps = false;
//    protected $dateFormat = 'U';
    public  function app()
    {
        return $this->hasOne(app::class);
    }


}
