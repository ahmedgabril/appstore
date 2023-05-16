<?php

namespace App\Helpers;
use App\Models\app;
use App\Models\catogeryapp;
use App\Models\sitesetting;
use App\Models\handelseodata;
use App\Models\get_cretetor_detal;


class helpers
{
    public static function getdata()
    {
         $appdata = catogeryapp::with('app')->paginate();
       return $appdata;


    }
    public static function siteset()
    {
         $settings = sitesetting::get()->first();
       return $settings;


    }
    public static function getappcount(int $id){
       return app::with('catogeryapp')->where('catogeryapp_id',$id)->count();

    }

    public static function getmetadata(){

  return handelseodata::first();
}
public static function getst($value){

  $getdetail = get_cretetor_detal::where('createtor_name',$value)->first();
  if($getdetail){
    return  'الربح'. ' : '.$getdetail->totalprofet. ' $'.'  ' .'النقرات'.' : '. $getdetail->totalclick.' '.' الزيارات'.' : ' . $getdetail->totalvistor ;
  }


}

}
