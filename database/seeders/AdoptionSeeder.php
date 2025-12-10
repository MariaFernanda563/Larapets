<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;
use App\Models\Adoption;

class AdoptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adop = new Adoption();
        $adop->user_id = 2;
        $adop->pet_id = 3;
        if ($adop->save()) {
            $pet = Pet::find(3);
            $pet->status = 1;
            $pet->save();
        }
    }
}
