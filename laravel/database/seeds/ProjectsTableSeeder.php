<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();

        for ($i = 0; $i < 40; $i++)
        {
            DB::table('tbl_projects')->insert([
                'customer_id' => $faker->create()->numberBetween(1,50),
                'name' => $faker->create()->catchPhrase,
                'description' => $faker->create()->sentence,
                'status' => $faker->create()->randomDigit,
                'maintained_contract' => $faker->create()->numberBetween(0,1),
                'applications' => $faker->create()->sentence,
                'hardware' => $faker->create()->sentence,
                'operating_system' => $faker->create()->word,
                'appointments' => $faker->create()->date,
                'internal_cp' => $faker->create()->name,
            ]);
        }
    }
}
