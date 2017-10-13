<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(AppointmentsTableSeeder::class);
        $this->call(InvoicesTableSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ExtraaddressTableSeeder::class);
    }
}
