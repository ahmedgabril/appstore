<?php

namespace App\Http\Livewire;

use App\Models\app;
use Livewire\Component;
use Livewire\WithPagination;

class Allgame extends Component
{
    use  WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $cattypes = "العاب";
//    public $pub;

//    public function mount(){
//        $this->pub = request()->route('pub');
//
//    }
    public function render()
    {

        return view('livewire.allgame',[
         'alldata' =>  app::query()
          -> where('appstype',$this->cattypes)
             ->select('id','shortdes','imgsumnail','name')
             ->orderBy('id','desc')
             ->paginate(12),
//            'pubname'=>$this->pub

        ])

            ->extends('layouts.forntend')
            ->section('maincontent');
    }
}
