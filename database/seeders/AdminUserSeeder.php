<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo một người dùng mới
        User::create([
            'name' => 'Admin',
            'email' => 'admin',
            'password' => Hash::make('admin')
        ]);
    }
}
