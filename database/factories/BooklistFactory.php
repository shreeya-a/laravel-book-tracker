<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booklist>
 */
class BooklistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->unique()->word,
            'author' => $this->faker->name(),
            'genre' => $this->faker->word(),
            'status' => $this->faker->randomElement(['in progress', 'skipped','complete','wish list']),
            'start' => $this->faker->date(),
            'finish' => $this->faker->date(),
            'review' => $this->faker->sentence(),
            'user_id' => $this->faker->numberBetween(1,10),


        ];
    }
}
