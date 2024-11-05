<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hero::create([
            'title' => 'INDO AQUATIC TRADE',
            'description' => 'Global Exports <br>
            Serving 10+ Countries: China, the United States, United Arab Emirates, Saudi Arabia, Japan, South Korea, Taiwan, Hong Kong, Singapore, Thailand, Malaysia, and Vietnam.
            Production Capacity per Commodity ±80TON / Month
            Over 30+ B2B Partners Satisfied
            Partnership with 1000+ fishermen in Indonesia',
            'why_us' => '1. Top Quality Seafood 
            We exclusively provide the finest seafood, sourced with care, processed using superior methods, and subjected to rigorous quality control. 
            2. Fair Price & Fair Trade 
            We reliably ensure fair and competitive pricing, while also advocating for fair trade practices to support sustainable and equitable relationships with local fishermen.
            3. Relationship and Service 
            We consistently prioritize fostering strong relationships and delivering exceptional service to all our valued customers.
            4. Guarantee 
            We confidently guarantee our products are safely delivered and compensate for any issues, showing our commitment to quality and customer satisfaction.',
        ]);
    }
}
