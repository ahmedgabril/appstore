<?php


namespace App\Http\Traits;
use App\Models\catogeryapp;


trait frontendcatogerydata
{
    public function getdata()
    {
        $data = catogeryapp::get();

        return  $data;

    }
}
