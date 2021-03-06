<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
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
            Service::create([
                "title" => $faker->title,
                "description" => $faker->text(200),
                "price" =>$faker->numberBetween(10,70),
            ]);

        }
    }
}
