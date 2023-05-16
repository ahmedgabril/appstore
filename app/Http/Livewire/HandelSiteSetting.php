<?php

namespace App\Http\Livewire;

use App\Models\contactus;
use App\Models\sitesetting;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class HandelSiteSetting extends Component
{
 use WithFileUploads;
    public $title,
        $logo,
        $getlogotemp,
        $hearo_img,
       $imgreslogo,
        $shortdes,
        $getheroimgtemp,
        $getheroimgres,
        $getid;

    public function mount(){

        $getdata =  sitesetting::first();
        $this->title =$getdata->title;
        $this->shortdes =$getdata->shortdes;
        $this->getid =$getdata->id;

    }

    public function removesumnal(){
        $this->logo = "";
    } public function removehero(){
        $this->hearo_img = "";
    }
    public function render()
    {
        $getdata =  sitesetting::first();
        $this->getlogotemp =$getdata->logo;
        $this->getheroimgtemp =$getdata->hearo_img;

        return view('livewire.handel-site-setting');
    }


    public function updatesitesetting( ){


        if(!empty($this->logo) ){



            Storage::deleteDirectory('public/logo');
            $this->imgreslogo =  $this->logo->store('logo/','public');

        }else{

            $this->imgreslogo = $this->getlogotemp;

        }



        if(!empty($this->hearo_img) ){



            Storage::deleteDirectory('public/hearosimg');
            $this->getheroimgres =  $this->hearo_img->store('hearosimg/','public');

        }else{

            $this->getheroimgres = $this->getheroimgtemp;

        }

        sitesetting::where('id',$this->getid)->update([
            'title'=>$this->title,
            'shortdes'=>$this->shortdes,
            'logo'=>$this->imgreslogo == null?  $this->getlogotemp:$this->imgreslogo,
            'hearo_img'=>$this->getheroimgres == null? $this->getheroimgtemp:$this->getheroimgres,

        ]);
        $this->reset(['logo','hearo_img']);
//        $this->logo ="";
//        $this->hearo_img ="";
        $this->dispatchBrowserEvent('update',['msg'=>'تم تحديث البيانات بنجاح']);
    }
}
