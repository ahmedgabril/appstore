<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\handelseodata;

class Handelseo extends Component
{


    public $sitename;
    public $sitedes;
    public $globid;

    public function mount(){

      $getfirst =   handelseodata::first();

    $this->sitename = $getfirst->sitename;
    $this->sitedes = $getfirst->sitedes;
    $this->globid = $getfirst->id;
   



    }

    public function updated($propertyName)
    {
    

            $this->validateOnly($propertyName,[
                'sitename' => 'required|string',
                'sitedes' => 'required|string',
            ]);

  
    }
    // protected $messages = [
    //     'name.required' => 'اسم الوظيفه مطلوب',
    //     'name.min' => 'اقل عدد للاحرف (3)',
   
    // ];
  
    public function render()
    {
        return view('livewire.handelseo');
    }


    public function upseodata(){

        $validatedData = $this->validate([
            'sitename' => 'required|string',
            'sitedes' => 'required|string',

        ]);
        handelseodata::where('id',$this->globid)->update([
            'sitename'=> $this->sitename,
            'sitedes'=>  $this->sitedes,

        ]) ;
        $this->dispatchBrowserEvent('update',['msg'=>'تم تحديث البيانات بنجاح']);


    }

 
}
