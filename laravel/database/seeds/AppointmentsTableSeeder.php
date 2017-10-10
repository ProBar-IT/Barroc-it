<?php

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
        $faker = new \Faker\Factory();

        for ($i = 0; $i < 280; $i++)
        {
            DB::table('tbl_appointments')->insert([
                'customer_id' => $faker->create()->numberBetween(1,50),
                'date_of_action' => $faker->create()->dateTimeBetween('-1 years', '1 years'),
                'description' => $faker->create()->sentence,
                'next_action' => $faker->create()->dateTimeBetween('-1 years', '1 years'),
            ]);
        }
    }
}
