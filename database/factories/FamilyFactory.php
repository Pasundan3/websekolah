<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Family>
 */
class FamilyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create();
        $relationships = ['ayah', 'ibu', 'wali'];
        return [
            'name'=> fake()->name(),
            'nik' => Str::random(10),
            'date_of_birth' => fake()->dateTime('d:M:Y'),
            'gender' => 'male',
            'religion' => 'islam',
            'address' => Str::random(20),
            'phone_number' => Str::random(13),
            'last_education' => 'SMA',
            'working_as' => 'pengangguran',
            'income' => '3000000',
            'parent_status' => $faker->randomElement($relationships),
            'student_id' => rand(1, 100),
        ];
    }
}
