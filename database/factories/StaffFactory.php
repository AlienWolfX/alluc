<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'admin_id' => '1',
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'age' => $this->faker->numberBetween(18, 70),
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // password
            'contact_number' => '09123456789',
            'profile_picture_path' => $this->faker->imageUrl(400, 400, 'people'),
        ];
    }
}
