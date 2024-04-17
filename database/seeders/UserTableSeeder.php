<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $admin = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ];

        User::create($admin);

        $test = [
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test123')
        ];

        User::create($test);
    }

    public function down()
    {
        User::where('email', 'admin@gmail.com')->delete();
        User::where('email', 'test@gmail.com')->delete();
    }
}
