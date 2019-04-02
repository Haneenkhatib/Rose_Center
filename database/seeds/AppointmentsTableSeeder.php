<?php

use App\Appointment;
use Illuminate\Database\Seeder;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(0, 50) as $index) {
            Appointment::create([
                "user_id" => $faker->numberBetween(1,50),
                "service_id" => $faker->numberBetween(1,50),
                "date" =>$faker->date(),
                "Description"=>$faker->text(200)
            ]);

        }
    }
}
