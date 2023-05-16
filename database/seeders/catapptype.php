<?php

namespace Database\Seeders;

use App\Models\catogerytype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class catapptype extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       catogerytype::create([
           'appstype' =>'تطبيقات'

       ]);
        catogerytype::create([
            'appstype' =>'العاب'

        ]);
    }
}
