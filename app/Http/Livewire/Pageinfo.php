<?php

namespace App\Http\Livewire;

use App\Models\app;
use Livewire\Component;

class Pageinfo extends Component
{
    public
    $getname;

    public function mount($name){


    
        $this->getname =$name;
    
        


    }
    public function render()
    {
     
   $gets = app::where('name',$this->getname)->first();
        

        return view('livewire.pageinfo',[
            'getalldata' => $gets,

        ])
            ->extends('layouts.forntend')
            ->section('maincontent');
    }
}
