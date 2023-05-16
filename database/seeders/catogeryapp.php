<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class catogeryapp extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        \App\Models\catogeryapp::truncate();
        DB::table('catogeryapps')->insert([
            'catname' => 'الاخبار والمجلات',

        ]);
        DB::table('catogeryapps')->insert([
            'catname' => 'اجتماعي',

        ]);
        DB::table('catogeryapps')->insert([
            'catname' => 'ادوات  الفيديو',

        ]);  DB::table('catogeryapps')->insert([
            'catname' => 'الاهل والاطفال',

        ]);
    }
}
