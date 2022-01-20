<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $root_user = User::create([
            'name' => "Default User",
            'email' => "root@localhost",
            'email_verified_at' => now(),
            'date_of_birth' => now(),
            'about_me' => "Default Please Change",
            'password' => Hash::make('root_password')
        ]);

        $root_user->save();
    }
}
