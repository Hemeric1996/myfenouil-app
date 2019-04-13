<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create('fr_FR');
        $departement = ["prospection", "assistant", "gestionnaire", "responsable"];

        for ($i=0; $i < 25; $i++) {
				DB::table('users')->insert([
					'email' => $faker->unique()->email,
					'password' => bcrypt('12345678'),
					'departement' => $departement[rand(0,3)],
		        ]);
		    }
    }
}
