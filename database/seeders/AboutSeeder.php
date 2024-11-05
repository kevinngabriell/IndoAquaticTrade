<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logoPath = 'default/indoaquatic/logo.png';
        $faviconPath = 'default/indoaquatic/logo.png';
        // $coverPath = 'default/cover.jpg';

        // Menambahkan data ke dalam tabel "about"
        DB::table('about')->insert([
            'name' => 'INDO AQUATIC TRADE',
            'perusahaan' => 'PT. Niaga Lima Samudra',
            'sub' => 'Seafood Supreme, Everyone\'s Dream!',
            'keywords' => 'Seafood Supreme, Everyone\'s Dream!',
            'open_hours' => 'Monday-Saturday :  <br/> 11:00 AM - 2300 PM',
            'logo' => $logoPath,
            'favicon' => $faviconPath,
            'email' => 'admin@niagalimasmudra.com',
            'phone' => '+886 976 579 895',
            'address' => 'Ruko Solvang Arcade, Jl. Mission Drive No.6, Kel. Kelapa Dua, Kec. Kelapa Dua, Kabupaten Tangerang, Banten, Indonesia. 15810',
            'description' => 'Indo Aquatic Trade has been a leading seafood trading company in Indonesia since 2021. Run under PT. Niaga Lima Samudra, we are a renowned enterprise devoted to the production and exportation of superior-grade marine products. We exclusively collaborate with local Indonesian fishermen to provide top-notch seafood for worldwide distribution. ',
            'taglines' => '#1 Seafood Supplier in Indonesia',
            'social_links' => json_encode(['facebook' => 'https://www.facebook.com', 'twitter' => 'https://www.twitter.com']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
