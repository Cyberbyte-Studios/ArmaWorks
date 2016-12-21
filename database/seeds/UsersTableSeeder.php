<?php

use Illuminate\Database\Seeder;
use Someline\Models\Foundation\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Test Admin',
            'email' => 'test@admin.com',
            'password' => bcrypt('testadmin'),
            'remember_token' => str_random(10),
            'gender' => 'M',
            'birthday' => '1994-07-08',
            'country' => 'GB',
            'timezone' => 'Europe/London',
            'locale' => 'en',
            'username' => 'testadmin',
            'phone_number' => '+1234567890',
            'status' => 1,
        ]);

        factory(User::class, 50)->create();
    }
}
