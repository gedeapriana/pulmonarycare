<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseasesSymptomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $relations = [
            ['diseases_id' => 1, 'symptoms_id' => 1],
            ['diseases_id' => 5, 'symptoms_id' => 2],
            ['diseases_id' => 6, 'symptoms_id' => 2],
            ['diseases_id' => 4, 'symptoms_id' => 3],
            ['diseases_id' => 6, 'symptoms_id' => 3],
            ['diseases_id' => 1, 'symptoms_id' => 4],
            ['diseases_id' => 2, 'symptoms_id' => 4],
            ['diseases_id' => 4, 'symptoms_id' => 4],
            ['diseases_id' => 6, 'symptoms_id' => 4],
            ['diseases_id' => 7, 'symptoms_id' => 4],
            ['diseases_id' => 1, 'symptoms_id' => 5],
            ['diseases_id' => 2, 'symptoms_id' => 5],
            ['diseases_id' => 6, 'symptoms_id' => 5],
            ['diseases_id' => 7, 'symptoms_id' => 5],
            ['diseases_id' => 3, 'symptoms_id' => 6],
            ['diseases_id' => 1, 'symptoms_id' => 7],
            ['diseases_id' => 6, 'symptoms_id' => 7],
            ['diseases_id' => 5, 'symptoms_id' => 7],
            ['diseases_id' => 1, 'symptoms_id' => 8],
            ['diseases_id' => 6, 'symptoms_id' => 8],
            ['diseases_id' => 7, 'symptoms_id' => 8],
            ['diseases_id' => 1, 'symptoms_id' => 9],
            ['diseases_id' => 5, 'symptoms_id' => 9],
            ['diseases_id' => 6, 'symptoms_id' => 9],
            ['diseases_id' => 1, 'symptoms_id' => 10],
            ['diseases_id' => 6, 'symptoms_id' => 10],
            ['diseases_id' => 7, 'symptoms_id' => 10],
            ['diseases_id' => 1, 'symptoms_id' => 11],
            ['diseases_id' => 5, 'symptoms_id' => 11],
            ['diseases_id' => 6, 'symptoms_id' => 11],
            ['diseases_id' => 4, 'symptoms_id' => 12],
            ['diseases_id' => 5, 'symptoms_id' => 12],
            ['diseases_id' => 1, 'symptoms_id' => 13],
            ['diseases_id' => 5, 'symptoms_id' => 13],
            ['diseases_id' => 6, 'symptoms_id' => 13],
            ['diseases_id' => 1, 'symptoms_id' => 14],
            ['diseases_id' => 6, 'symptoms_id' => 14],
            ['diseases_id' => 7, 'symptoms_id' => 14],
            ['diseases_id' => 6, 'symptoms_id' => 15],
            ['diseases_id' => 8, 'symptoms_id' => 17],
        ];

        foreach ($relations as $relation) {
            DB::table('disease_symptom')->insert([
                'disease_id' => $relation['diseases_id'],
                'symptom_id' => $relation['symptoms_id'],
            ]);
        }
    }
}
