<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            "companyCode" => fake()->numberBetween($min = 100000000, $max = 999999999),
            "pvm" => fake()->numberBetween($min = 100000000, $max = 999999999),
            "director" => fake()->name(),
            "location" => fake()->address(),
            "phone" => fake()->phoneNumber(),
            "email" => fake()->email(),
            "website" => fake()->url(),
            "socials" => fake()->url(),
            "workers" => fake()->numberBetween(),
            "capital" => fake()->numberBetween(),
            "age" => fake()->date(),
            "tags" => "Food shops, General shop, Internet provider",
            "description" => fake()->paragraph(3)

            
        ];
    }
}
