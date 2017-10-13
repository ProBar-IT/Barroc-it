<?php

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

        DB::table('users')->insert([
        'name' => 'Admin',
        'email' => 'admin@barroc-it.nl',
        'password' => bcrypt('Admin')
        ]);

        DB::table('users')->insert([
            'name' => 'Development',
            'email' => 'development@barroc-it.nl',
            'password' => bcrypt('Development')
        ]);

        DB::table('users')->insert([
            'name' => 'Finance',
            'email' => 'finance@barroc-it.nl',
            'password' => bcrypt('Finance')
        ]);

        DB::table('users')->insert([
            'name' => 'Sales',
            'email' => 'sales@barroc-it.nl',
            'password' => bcrypt('Sales')
        ]);

    }
}
