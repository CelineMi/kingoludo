<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();

         DB::table('games')->insert([
             'name' => $faker->name,
             'editor' => $faker->name,
             'year' => $faker->year,
             'photos' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
             'description' => $faker->paragraph(3),
             'category' => $faker-> randomElement($array = array ('Familiale', 'Gestion', 'Figurine', 'Expert', 'Apéro')),
             'length' => $faker->randomElement($array = array (5,15,30,45,60)),
             'playersnumber' => $faker->numberBetween(1,6),
             'comment' => $faker->paragraph(1),
         ]);

    }
}
