<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personal_profiles')->insert([
            'full_name' => 'Arjuna Nanda',
            'nickname' => 'Arjun',
            'slogan' => 'Coding with passion and coffee ☕',
            'about' => 'Saya adalah seorang web developer yang senang membangun aplikasi modern berbasis Laravel dan Filament.',
            'github' => 'https://github.com/arjunanda',
            'linkedin' => 'https://www.linkedin.com/in/arjunanda',
            'instagram' => 'https://www.instagram.com/arjunanda',
            'whatsapp' => 'https://wa.me/6281234567890',
            'email' => 'arjun@example.com',
            'maps' => 'https://goo.gl/maps/contohLokasi',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
