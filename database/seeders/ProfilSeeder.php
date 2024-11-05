<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profil::create([
            'sejarah' => 'Aquatic Trade has been a leading seafood trading company in Indonesia since 2021. Run under PT. Niaga Lima Samudra, we are a renowned enterprise devoted to the production and exportation of superior-grade marine products. We exclusively collaborate with local Indonesian fishermen to provide top-notch seafood for worldwide distribution.',
            'visi_misi' => 'To be the top choice for quality seafood worldwide, while championing sustainability and responsible sourcing.',
            'profil' => '• Deliver the exquisite seafood sourced from reputable suppliers from Indonesia.
            • Lead by example in promoting sustainable practices across the seafood industry.
            • Build strong and trustworthy relationships with partners and stakeholders.
            • Enhance flow of operations for efficient and effective seafood delivery.
            • Support local communities and economies through responsible business practices.'

        ]);
    }
}
