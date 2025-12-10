<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
use Illuminate\Database\Seeder;
use App\Models\Pet;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pet = new Pet();
        $pet->name        = 'Firulais';
        $pet->kind        = 'Dog';
        $pet->weight      = 7.6;
        $pet->age         = 2;
        $pet->breed       = 'French Bulldog';
        $pet->location    = 'Paris';
        $pet->description = 'Black dog, so charming, lovely';
        $pet->save();

        $pet = new Pet();
        $pet->name        = 'Killer';
        $pet->kind        = 'Dog';
        $pet->weight      = 18;
        $pet->age         = 6;
        $pet->breed       = 'Cane Corso';
        $pet->location    = 'Milan';
        $pet->description = 'Explosive & Hungry, be carefully with it, Danger';
        $pet->save();

        $pet = new Pet();
        $pet->name        = 'Kiara';
        $pet->kind        = 'cat';
        $pet->weight      = 3.2;
        $pet->age         = 1;
        $pet->breed       = 'Siamese';
        $pet->location    = 'Rome';
        $pet->description = 'Charming and playful cat';
        $pet->save();

        $pet = new Pet();
        $pet->name        = 'Carrancho';
        $pet->kind        = 'pig';
        $pet->weight      = 27.4;
        $pet->age         = 4;
        $pet->breed       = 'Mini Pig';
        $pet->location    = 'Berlin';
        $pet->description = 'Lazy pig, loves to eat and sleep';
        $pet->save();
    }
}
