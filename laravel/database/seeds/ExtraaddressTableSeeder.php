<?php

use Illuminate\Database\Seeder;

class ExtraaddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();
        for ($i = 1; $i <= sizeof(\App\Customer::all()); $i++) {

            DB::table('tbl_extra_address')->insert([
                'customer_id' => $i,
                'street' => $faker->create()->streetName,
                'housenumber' => $faker->create()->buildingNumber,
                'zip_code' => $faker->create()->postcode,
                'residence' => $faker->create()->country,
            ]);
        }
    }
}
