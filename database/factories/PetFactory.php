<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $petNames = [
            // Dogs (20 names)
            "Max",
            "Buddy",
            "Charlie",
            "Cooper",
            "Rocky",
            "Bear",
            "Duke",
            "Jack",
            "Tucker",
            "Oliver",
            "Leo",
            "Milo",
            "Zeus",
            "Winston",
            "Teddy",
            "Murphy",
            "Harley",
            "Henry",
            "Sam",
            "Louie",

            // Cats (20 names)
            "Luna",
            "Bella",
            "Lucy",
            "Chloe",
            "Sophie",
            "Lily",
            "Molly",
            "Daisy",
            "Zoe",
            "Stella",
            "Lola",
            "Maggie",
            "Penny",
            "Roxy",
            "Ruby",
            "Gracie",
            "Rosie",
            "Ellie",
            "Mia",
            "Piper"
        ];

        $dogBreeds = [
            "Labrador Retriever",
            "German Shepherd",
            "French Bulldog",
            "Golden Retriever",
            "Poodle",
            "Bulldog",
            "Beagle",
            "Rottweiler",
            "Siberian Husky",
            "Chihuahua"
        ];

        $catBreeds = [
            "Persian",
            "Siamese",
            "Maine Coon",
            "British Shorthair",
            "Bengal",
            "Sphynx",
            "Ragdoll",
            "Abyssinian",
            "Scottish Fold",
            "Russian Blue"
        ];

        $birdBreeds = [
            "Parakeet",
            "Canary",
            "Cockatiel",
            "Lovebird",
            "African Grey Parrot",
            "Macaw",
            "Finch",
            "Cockatoo",
            "Budgerigar",
            "Amazon Parrot"
        ];

        $pigBreeds = [
            "Yorkshire",
            "Duroc",
            "Berkshire",
            "Hampshire",
            "Landrace",
            "Chester White",
            "Tamworth",
            "Large Black",
            "Pietrain",
            "Vietnamese Pot-bellied"
        ];

        $kind = fake()->randomElement(['Dog', 'Cat', 'Bird', 'Pig']);

        switch ($kind) {
            case 'Dog':
                $breed = fake()->randomElement($dogBreeds);
                break;
            case 'Cat':
                $breed = fake()->randomElement($catBreeds);
                break;
            case 'Bird':
                $breed = fake()->randomElement($birdBreeds);
                break;
            case 'Pig':
                $breed = fake()->randomElement($pigBreeds);
                break;
        }

        return [
            'name' => fake()->randomElement($petNames),
            'kind' => $kind,
            'weight' => fake()->numerify('#.#'),
            'age' => fake()->numerify('#'),
            'breed' => $breed,
            'location' => fake()->city(),
            'description' => fake()->sentence(8),
        ];
    }
}
