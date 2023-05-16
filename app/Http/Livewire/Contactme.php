<?php

namespace App\Http\Livewire;

use App\Models\contactus;
use Livewire\Component;

class Contactme extends Component
{

    public $youtubeurl,
        $facebookurl,
        $instaurl,
        $tectook,
        $email,
        $phone,
        $shortdes,
        $getid;

        public function mount(){

           $getdata =  contactus::first();
          $this->phone =$getdata->phone;
          $this->email =$getdata->email;
          $this->facebookurl =$getdata->facebookurl;
          $this->youtubeurl =$getdata->youtubeurl;
          $this->shortdes =$getdata->shortdes;
          $this->tectook =$getdata->tectook;
          $this->instaurl =$getdata->instaurl;
          $this->getid =$getdata->id;

        }
    public function render()
    {
        return view('livewire.contactme');
    }


    public function updatecontact( ){

      contactus::where('id',$this->getid)->update([
        'phone'=>$this->phone,
        'email'=>$this->email,
        'shortdes'=>$this->shortdes,
        'youtubeurl'=>$this->youtubeurl,
        'tectook'=>$this->tectook,
        'instaurl'=>$this->instaurl,
        'facebookurl'=>$this->facebookurl,
      ]);
      $this->dispatchBrowserEvent('update',['msg'=>'تم تحديث البيانات بنجاح']);
    }
}
