<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'arjunanda',
                'email' => 'm.iqbal.arjunanda@gmail.com',
                'password' => Hash::make('arjunanda'), // Ganti kalau perlu
            ]
        );
    }
}
