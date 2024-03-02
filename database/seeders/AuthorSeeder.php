<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**

     */
    public function run(): void
    {
        Author::factory()->createAuthors([
            'J.D. Salinger',
            'Harper Lee',
            'George Orwell',
            'F. Scott Fitzgerald',
            'Gabriel Garcia Marquez',
            'Aldous Huxley',
            'J.R.R. Tolkien',
            'Ray Bradbury',
            'C.S. Lewis',
            'J.K. Rowling',
            'Dan Brown',
            'Stephen King',
            'Douglas Adams',
            'Suzanne Collins',
            'Stieg Larsson',
            'Margaret Mitchell',
            'Paulo Coelho',
            'Jane Austen',
            'Markus Zusak',
            'Joseph Heller',
            'Frank Herbert',
            'Cormac McCarthy',
            'George R.R. Martin',
            'Alice Walker',
            'Ernest Hemingway',
            'John Steinbeck',
            'Michael Crichton',
            'Thomas Harris',
        ]);
    }
}
