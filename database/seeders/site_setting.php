<?php

namespace Database\Seeders;

use App\Models\addsconfig;
use App\Models\sitesetting;
use App\Models\handelseodata;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class site_setting extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        sitesetting::create([
           'title' =>'العاب للجوال اندرويد وايفون',
           'shortdes' =>'من خلال موقعنا ، يمكنك تنزيل أحدث إصدارات الألعاب وأكثرها شهرة لنظام اندرويد',
            'logo' =>'logo'
        ]);

   

        handelseodata::create([
            'sitename' =>'me-apk',
            'sitedes' =>'من خلال موقعنا ، يمكنك تنزيل أحدث إصدارات الألعاب وأكثرها شهرة لنظام اندرويد',
           
         ]);



   
    }
}
