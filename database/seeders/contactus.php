<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class contactus extends Seeder
{

    public function run(): void
    {


        \App\Models\contactus::create([

            'email'=>'plalalli@gmail.com',
            'phone'=>'01090902345',
            'youtubeurl'=>'https://www.youtube.com/@pilal-mohamedali',
            'facebookurl'=>'https://www.youtube.com/@pilal-mohamedali',
            'instaurl'=>'https://www.youtube.com/@pilal-mohamedali',
            'shortdes'=>'مرحبا للاعلان علي موقعنا يرجي الاتثصال بنا موقع ملوك السعاده لتحميل جميع التطبيقات',
            'tectook'=>'https://www.youtube.com/@pilal-mohamedali',
        ]);

    }
}
