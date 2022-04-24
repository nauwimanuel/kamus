<?php

namespace Database\Seeders;

use illuminate\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->username = "AdminKamus";
        $user->email = "admin@kamus.com";
        $user->password = Hash::make('12345678'); 
        $user->save();
    }
}
