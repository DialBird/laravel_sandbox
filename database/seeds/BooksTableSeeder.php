<?php

use App\Models\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->truncate();
        $books = [
            ['title' => 'PHP Book',
            'description' => 'this is your book',
            'price' => 2000,
            'page_count' => 1000],
            ['title' => 'Laravel Book',
            'description' => 'this is your book',
            'price' => 3000],
            ['title' => 'Ruby Book',
            'description' => 'this is your book',
            'price' => 2500,
            'page_count' => 100]
        ];

        foreach($books as $book) {
            Book::create($book);
        }
    }
}
