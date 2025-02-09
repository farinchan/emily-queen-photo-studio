<?php

namespace Database\Seeders;

use App\Models\SettingWebsite;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $admin =  Role::create(['name' => 'admin']);

        $user = User::create([
            'name' => 'Fajri Rinaldi Chan',
            'position' => 'Developer',
            'email' => 'fajri@gariskode.com',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('admin');

        SettingWebsite::create([
            'name' => 'Laravel 8',
            'favicon' => 'favicon.png',
            'logo_small' => 'logo_small.png',
            'logo_mid' => 'logo_mid.png',
            'logo_large' => 'logo_large.png',
            'email' => 'info@emilyqueenphotostudio.com',
            'phone' => '081234567890',
            'address' => 'Jl. Sawahan V No.1, Sawahan, Kec. Padang Tim., Kota Padang, Sumatera Barat 25171',
            'latitude' => '-0.9457228872077869',
            'longitude' => '100.37087871926934',
            'instagram' => 'https://www.instagram.com/emilyqueenphotostudio/',
            'twitter' => 'https://twitter.com/emilyqueenphotostudio',
            'tiktok' => 'https://www.tiktok.com/@emilyqueenphotostudio',
            'linkedin' => 'https://www.linkedin.com/company/emilyqueenphotostudio',
            'about' => 'Emily Queen Photo Studio adalah studio foto yang berlokasi di Padang, Sumatera Barat. Kami melayani jasa foto prewedding, wedding, keluarga, dan lainnya.',
        ]);


    }
}
