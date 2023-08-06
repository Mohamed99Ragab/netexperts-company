<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make(123456) 
        ]);
        $role = Role::where('name','Admin')->first();

        $user->assignRole($role);
    }
}
