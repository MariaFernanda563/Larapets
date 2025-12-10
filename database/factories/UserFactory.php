<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        // Elegir género aleatorio
        $gender = fake()->randomElement(['Male', 'Female']);

        // Generar nombre según el género
        $fullname = $gender === 'Male'
            ? fake()->firstNameMale() . ' ' . fake()->lastName()
            : fake()->firstNameFemale() . ' ' . fake()->lastName();

        // Directorio donde se guardarán las imágenes
        $imageDir = public_path('images');
        if (!File::exists($imageDir)) {
            File::makeDirectory($imageDir, 0755, true);
        }

        // Generar número aleatorio del 1 al 99
        $randomNumber = rand(1, 99);

        // URLs base para hombres y mujeres (solo una por género)
        $maleImageBase = 'https://randomuser.me/api/portraits/men/';
        $femaleImageBase = 'https://randomuser.me/api/portraits/women/';

        // Asignar URL final según el género
        $imageUrl = $gender === 'Male'
            ? $maleImageBase . $randomNumber . '.jpg'
            : $femaleImageBase . $randomNumber . '.jpg';


        // Generar nombre único para el archivo
        $imageName = Str::uuid() . '.jpg';
        $imagePath = $imageDir . '/' . $imageName;

        // Descargar la imagen
        try {
            $imageData = file_get_contents($imageUrl);
            file_put_contents($imagePath, $imageData);
        } catch (\Exception $e) {
            // Si falla la descarga, usar imagen por defecto
            $imageName = 'no-photo.png';
        }

        return [
            'document' => fake()->numerify('75#######'),
            'fullname' => $fullname,
            'gender' => $gender,
            'birthdate' => fake()->date(),
            'photo' => 'images/' . $imageName,
            'phone' => fake()->numerify('3#########'),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'active' => 1,
            'role' => 'customer',
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
