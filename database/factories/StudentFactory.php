<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();
        return [
            'name'=> fake()->name(),
            'nisn' => Str::random(10),
            'nik' => Str::random(10),
            'date_of_birth' => fake()->dateTime('d:M:Y'),
            'gender' => 'male',
            'religion' => 'islam',
            'address' => Str::random(20),
            'phone_number' => Str::random(13),
            'last_education' => 'SMP',
            'user_id' => rand(4, 50),
            'verify_status' => false,
        ];
    }
}
