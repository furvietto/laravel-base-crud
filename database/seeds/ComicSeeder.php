<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $comic = new Comic();
            $comic->title = $faker->word();
            $comic->photo = $faker->imageUrl(640, 480, 'monitor', true);;
            $comic->author = $faker->words(3,true);
            $comic->genre = $faker->word(4,true);
            $comic->description = $faker->paragraph();
            $comic->price = $faker->randomFloat(1, 20, 100);
            $comic->exitDate = $faker->date();
            $comic->save();
        }
    }
}
