<?php

use Illuminate\Database\Seeder;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();

        for ($i = 0; $i < 30; $i++)
        {
            DB::table('tbl_invoices')->insert([
                'project_id' => $faker->create()->numberBetween(1,29),
                'description' => $faker->create()->sentence,
                'price' => $faker->create()->numberBetween(100, 4000),
                'date_of_sending' => $faker->create()->date,
                'status' => $faker->create()->numberBetween(0,3)
            ]);
        }
    }
}
