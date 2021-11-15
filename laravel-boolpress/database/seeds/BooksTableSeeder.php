<?php

use Illuminate\Database\Seeder;
use App\Book;

use Faker\Generator as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i= 0 ; $i <50 ; $i++){
            $newBook = new Book();
            $newBook->name = $faker->name();
            $newBook->author = $faker->name();
            $newBook->description = $faker->text();
            $newBook->image_url = $faker->imageUrl(1000, 400, $newBook->title , true, $newBook->author);

            $newBook->save();
        }
    }
}
