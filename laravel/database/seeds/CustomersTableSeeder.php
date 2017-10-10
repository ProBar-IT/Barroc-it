<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();

        $fakerDutch = new Faker\Generator();
        $fakerDutch->addProvider(new Faker\Provider\nl_NL\Company($fakerDutch));

        for ($i = 0; $i < 50; $i++)
        {
            DB::table('tbl_customers')->insert([
                'name' => $faker->create()->company,
                'street' => $faker->create()->streetName,
                'housenumber' => $faker->create()->buildingNumber,
                'zip_code' => $faker->create()->postcode,
                'residence' => $faker->create()->country,
                'cp_name' => $faker->create()->firstName,
                'cp_lastname' => $faker->create()->lastName,
                'cp_insertion' => $faker->create()->lastName,
                'tele' => $faker->create()->phoneNumber,
                'tele2' => $faker->create()->phoneNumber,
                'fax_number' => $faker->create()->phoneNumber,
                'mail' => $faker->create()->companyEmail,
                'banknumber' => $faker->create()->iban('nl'),
                'balance' => $faker->create()->numberBetween(1,401),
                'limit' => $faker->create()->numberBetween(1,400),
                'vat_code' => $fakerDutch->vat,
                'prospect' => $faker->create()->numberBetween(0,1),
                'ledgerbill' => $faker->create()->randomNumber,
                'creditworthy' => $faker->create()->numberBetween(0,1),
                'bcr' => $faker->create()->numberBetween(0,1),
            ]);
        }

    }
}
