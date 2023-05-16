<?php

namespace App\Http\Livewire;
use Carbon\Carbon;
// use Google\Client;

use App\Models\User;

use Livewire\Component;
use App\Models\get_cretetor_detal;




class Statacs extends Component
{

public $totalProfits;

        public function render()
    {
     $getp =   get_cretetor_detal::get();
    
        $this->totalProfits = collect($getp)->sum('totalprofet');
        $gettotalagentcount = User::where('gobtitle','agent')->count();
        $gettotalcreatetorcount = User::where('gobtitle','createtor')->count();
        $gettotaladminscount = User::where('gobtitle','admin')->count();


   
        return view('livewire.statacs',
        [
          'totalagentcount'=>$gettotalagentcount,
          'gettotalcreatetorcount'=>$gettotalcreatetorcount,
          'gettotaladminscount'=>$gettotaladminscount,


        ]);
    }


}
