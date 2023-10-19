<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    // protected $model = Admin::class;

    // public function createAdmin(string $email): Admin
    // {
    //     return $this->state(function (array $attributes) use ($email) {

    //         return [
    //             'name' => $this->faker->name,
    //             'email' => $email,
    //             'password' => bcrypt('Qwer1234!'),
    //             'email_verified_at' => now(),
    //             'remember_token' => $this->faker->randomAscii,
    //         ];
    //     })->create();
    // }

    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'email' => fake()->email(),
            'password' => Hash::make('Qwer1234!')
        ];
    }
}
