<?php

namespace App\Http\Controllers;

use App\Models\app;
use App\Models\catogeryapp;
use Illuminate\Http\Request;

class genralldata extends Controller
{

        public  function index(){
            return view('welcome',[

               'latestapps'=> app::query()->where('appstype','تطبيقات')->orderBy('id','desc')->take(30)->get(),
               'latestgames'=> app::query()->where('appstype','العاب')->orderBy('id','desc')->take(30)->get(),

            ]);

        }

}
