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
    }

    public function down()
    {
        User::where('email', 'admin@gmail.com')->delete();
    }
}
