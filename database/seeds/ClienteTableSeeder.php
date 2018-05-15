<?php

use Illuminate\Database\Seeder;

use App\Cliente;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Let's truncate our existing records to start from scratch.
        Cliente::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Cliente::create([
                'name' => $faker->sentence,
                //'lastname' => $faker->paragraph,
                'lastname' => $faker->sentence,
                'edad' => $i*2,
            ]);
        }
    }
}
