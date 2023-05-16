<?php

namespace App\Http\Livewire;

use App\Models\app;
use Livewire\Component;

class Search extends Component
{
    public $searchbyname;

    protected $queryString = [

        'searchbyname' => ['except' => ''],

    ];
protected $listeners = ['resetserch'];

public  function resetserch(){


   $this->searchbyname ='';


}
    public function render()
    {
        return view('livewire.search',[

            'datares' => $this->searchbyname ? app::query()
                ->where('name','like','%'.$this->searchbyname.'%')
                ->select('id','name','shortdes','imgsumnail')->get() : ''
        ]);
    }
}
