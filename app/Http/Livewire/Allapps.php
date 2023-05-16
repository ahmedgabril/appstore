<?php

namespace App\Http\Livewire;

use App\Models\app;
use Livewire\Component;
use Livewire\WithPagination;

class
Allapps extends Component
{
    use  WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $cattypes = "تطبيقات";
    public function render()
    {
        return view('livewire.allapps',[
            'alldata' =>  app::query()
                -> where('appstype',$this->cattypes)
                ->select('id','shortdes','imgsumnail','name')
                ->orderBy('id','desc')
                ->paginate(12),

        ])

            ->extends('layouts.forntend')
            ->section('maincontent');
    }
}
