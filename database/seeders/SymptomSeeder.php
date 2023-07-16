<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $symptoms = [
            ['description' => 'Batuk Kronis'],
            ['description' => 'Batuk Berdarah'],
            ['description' => 'Nyeri Dada'],
            ['description' => 'Sesak Napas'],
            ['description' => 'Napas pendek'],
            ['description' => 'Meningkatnya Produksi Lendir'],
            ['description' => 'Merasa Lelah Setelah Bangun Tidur'],
            ['description' => 'Suara Terdengar Serak'],
            ['description' => 'Penurunan Berat Badan'],
            ['description' => 'Kelelahan'],
            ['description' => 'Kehilangan Nafsu Makan'],
            ['description' => 'Demam Tinggi'],
            ['description' => 'Kesulitan Tidur'],
            ['description' => 'Berat Saat Bernapas'],
            ['description' => 'Kesulitan Menelan'],
            ['description' => 'Pembengkakan kaki atau tungkai'],
            ['description' => 'Kuku Terlihat Membiru'],
        ];

        foreach ($symptoms as $symptom) {
            DB::table('symptoms')->insert([
                'description' => $symptom['description'],
                'created_at' => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}
