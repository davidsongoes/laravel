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
        \Charlie\Customer::truncate();
        factory(\Charlie\Customer::class, 50)->create();
    }
}
