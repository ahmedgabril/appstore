<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


      $user =   User::create([
            'name' => 'ahmedgabril',
            'email' => 'a@gmail.com',
            'gobtitle' => 'admin',
            'password' => Hash::make('password'),
        ]);

        $role1 = Role::create(['name' => 'owner']);
        $permission = Permission::all()->pluck('id','id');
        $role1->givePermissionTo( $permission);
        $user->assignRole($role1);



    }
}
