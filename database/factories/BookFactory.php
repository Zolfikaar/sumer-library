<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

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


        $books =  [
            'The Catcher in the Rye',
            'To Kill a Mockingbird',
            '1984',
            'The Great Gatsby',
            'One Hundred Years of Solitude',
            'Brave New World',
            'The Lord of the Rings',
            'The Hobbit',
            'Fahrenheit 451',
            'Animal Farm',
            'The Chronicles of Narnia',
            'Harry Potter and the Sorcerer\'s Stone',
            'The Da Vinci Code',
            'The Shining',
            'The Hitchhiker\'s Guide to the Galaxy',
            'The Hunger Games',
            'The Girl with the Dragon Tattoo',
            'Gone with the Wind',
            'The Alchemist',
            'Pride and Prejudice',
            'The Book Thief',
            'Catch-22',
            'Dune',
            'The Road',
            'A Song of Ice and Fire',
            'The Color Purple',
            'The Sun Also Rises',
            'The Grapes of Wrath',
            'The Stand',
            'Jurassic Park',
            'The Silence of the Lambs',
            'The Old Man and the Sea',
            'Moby-Dick',
            'Wuthering Heights',
            'Les Misérables',
            'Frankenstein',
            'War and Peace',
            'Crime and Punishment',
            'Don Quixote',
            'Anna Karenina',
            'The Odyssey',
            'The Divine Comedy',
            'The Canterbury Tales',
            'The Picture of Dorian Gray',
            'Dracula',
            'Alice\'s Adventures in Wonderland',
            'The Adventures of Sherlock Holmes',
            'The Count of Monte Cristo',
            'Oliver Twist',
            'Jane Eyre',
            'Great Expectations',
            'David Copperfield',
            'Moby-Dick',
        ];



        return [
            'title' => array_shift($books),
            'desc' => $this->faker->paragraph,
            'buy_price' => $this->faker->randomFloat(4, 2, 99),
            'sell_price' => $this->faker->randomFloat(4, 2, 150),
            'count' => $this->faker->numberBetween(1, 50),
            'author_id' => $this->faker->numberBetween(1, 28),
            'category_id' => $this->faker->numberBetween(1, 17),
            'year' => $this->faker->year,
        ];
    }
}
