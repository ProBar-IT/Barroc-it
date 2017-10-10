<?php

use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();


        for ($i = 0; $i < 45; $i++)
        {
            DB::table('tbl_offers')->insert([
                'customer_id' => $faker->create()->numberBetween(1,50),
                'number' => $faker->create()->numberBetween(1,54),
                'status' => $faker->create()->numberBetween(0,1),
            ]);
        }
    }
}
