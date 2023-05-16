<?php

namespace App\Http\Livewire;

use App\Models\app;
use App\Models\catogeryapp;
use Livewire\Component;
use Livewire\WithPagination;

class Appcatcontent extends Component
{

    use WithPagination;
    public $page =1;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = [

//        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];
    public $appcatsid;


    public function mount($appid)
    {

        $this->appcatsid = $appid;
    }

    public function render()
    {


        if ($this->appcatsid) {


                $appdata = app::with(['catogeryapp'])->where('catogeryapp_id', $this->appcatsid)->paginate(12);


        }
        return view('livewire.appcatcontent', [

            'alldata' =>   $appdata,
            'catnames' => $this->appcatsid ? catogeryapp::where('id', $this->appcatsid)->select('catname')->first() : 'لايوجدبيانات في الوقت الحالي',


        ])
            ->extends('layouts.forntend')
            ->section('maincontent');

    }
}
