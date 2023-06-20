<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $role = Role::where('name','admin_super')->first();
        if(!$role){
            $role = Role::create(['name' => 'admin_super']);
        }
        $superAdmin = User::where('email','eugencustomagic@gmail.com')->first();
        if(!$superAdmin){
            $superAdmin = User::create([
                'name' => 'Eugen Luchianov',
                'email' => 'eugencustomagic@gmail.com',
                'password' => Hash::make('secret')
            ]);
        }

        $superAdmin->assignRole(['admin_super']);

        //php artisan db:seed --class=SuperAdminSeeder

    }
}
