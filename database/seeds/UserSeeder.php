<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('users')->insert([
//            'pseudo' => $faker->name,
//            'firstname' => $faker->name,
//            'lastname' => $faker->name,
//            'role' => $faker-> randomElement($array = array ('Admin', 'member')),
//            'presentation' => $faker->paragraph(3),
////            'avatar' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
//            'name' => $faker->name,
//            'email' => $faker->email,
//            'password' => $faker->password()
        ]);
    }
}
