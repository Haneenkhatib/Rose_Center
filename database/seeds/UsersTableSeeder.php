<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        foreach (range(0, 10) as $index) {
            $photo = $faker->image(public_path('photo'));
            $photo = str_replace(public_path(), '', $photo);
            User::create([
                "name" => $faker->name,
                "password" =>\Illuminate\Support\Facades\Hash::make("123456"),
                "email" => $faker->email,
                "photo" => $photo,
                "type" => $faker->randomElement(['E', 'C','A']),
            ]);

        }


    }
}
