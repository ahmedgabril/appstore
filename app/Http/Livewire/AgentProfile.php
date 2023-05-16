<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\get_cretetor_detal;
use Livewire\Component;

class AgentProfile extends Component
{
 


    public function render()
    {

      $getd=  User::where('fathar',Auth()->user()->name)->get()->pluck('name')->toArray();
      $getv= get_cretetor_detal::where('agent_name',Auth()->user()->name)->select('totalprofet')->get();
      $getcount= get_cretetor_detal::where('agent_name',Auth()->user()->name)->count();

  
     $gettotalprofit = collect($getv)->sum('totalprofet');
  
        return view('livewire.agent-profile',[

            'getc'=>   $getd,
            'gettotalprofit' => $gettotalprofit,
            'getagenttotalcountofcreatetor'=> $getcount
        ]);
    }




}
