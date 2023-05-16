<?php

namespace Database\Seeders;

use App\Http\Livewire\Pagedownload;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\PermissionRegistrar;

class permission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $prmation = [
            'اداره التطبيقات',
            'الاقسام',
            'اضافه قسم',
            'تعديل قسم',
            'حذف قسم',
            'عرض بيانات القسم',
            'التطبيقات',
            'اضافه تطبيق',
            'تعديل تطبيق',
            'حذف تطبيق',
            'عرض بيانات تطبيق',
            'اداره المستخدمين',
            'اداره المسئولين',
            'اداراه منشئ المحتوي',
            'اداره الوكلاء',
            'اداره منشئي المحتوى',
            'الصلاحيات والتراخيص',
            'اداراه الوظائف',
            'الاعدات العامه',
            'اعدات الموقع',
            'اعدات السيو',
            'من نحن',
       
     
        ];
//        DB::table('permissions')->truncate();
        foreach ($prmation as $per){
            \Spatie\Permission\Models\Permission::create(['name'=>$per]);

        }

    }
}
