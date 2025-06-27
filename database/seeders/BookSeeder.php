<?php

namespace Database\Seeders;

// import book from model make relationship 
use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Auto create 5 data in row table
        Author::factory()->count(5)->create()->each(function ($author){
            // Create 2-4 books per author
            Book::factory()->count(rand(2, 4))->create(['author_id' => $author->id]);

        });
    }
}
