<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= User::create([
        	'name' =>'Paing Paing',
        	'profile'=>'images/user/admin.png',
        	'email'=>'paing@gmail.com',
        	'password'=>Hash::make('lovelyjohn1995@'),
        ]);
       $admin->assignRole('admin');
        $customer=User::create([
        	'name' =>'Zay Yar ',
        	'profile'=>'images/user/customer.jpeg',
        	'email'=>'user@gmail.com',
        	'password'=>Hash::make('123456789'),
        ]);
        $customer->assignRole('customer');
    }
}
