<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{

    protected $model = Author::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }

    public function createAuthors(array $names)
    {
        foreach ($names as $name) {
            DB::table('authors')->insert([
                'name' => $name,
            ]);
        }
    }

}
