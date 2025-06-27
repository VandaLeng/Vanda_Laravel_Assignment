<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// import author from model 
use App\Models\Author;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'isbn' => $this->faker->unique()->isbn13(),
            'publicationYear' => $this->faker->year(),
            'genre' => $this->faker->randomElement(['Fiction', 'Non-Fiction', 'Science Fiction', 'Fantasy', 'Mystery']),
            'availableCopies' => $this->faker->numberBetween(1, 100),
            // connect relationship with id of the author
            'author_id' => Author::factory(),
            
        ];
    }
}
