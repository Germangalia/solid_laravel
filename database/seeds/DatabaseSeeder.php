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
        // $this->call(UserTableSeeder::class);

        $faker = Faker\Factory::create();
        $this->seedInvoices($faker);

    }

    /**
     * @param Faker $faker
     */
    private function seedInvoices($faker)
    {
        foreach (range(0,100) as $number) {

            $invoce = new \App\Invoices();

            $invoce->name = $faker->sentence;
            $invoce->totalAmmount = $faker->randomNumber;

            $invoce->save();

        }
    }
}
