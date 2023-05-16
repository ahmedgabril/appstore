<?php

namespace App\Http\Livewire;

use App\Models\app;
use Livewire\Component;

class Pagedownload extends Component
{

    public $getname;
    public function mount($name){

        $this->getname = $name;

    }
    public function render()
    {
        return view('livewire.pagedownload',[
            'data' => $this->getname ?  app::query()
                ->where('name',$this->getname)
                ->select('id','name','imgsumnail','iosurl','androidurl','apkurl')->first():'',

        ])
            ->extends('layouts.forntend')
            ->section('maincontent');
    }
}
