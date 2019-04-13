<?php

use Illuminate\Database\Seeder;

class IndividuTableSeeder extends Seeder
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
        	$caracteristique_commerciale = ["prospect", "client", "client interdit"];
			$departements = ["Aquitaine", "Auvergne", "Basse-Normandie", "Bourgogne", "Bretagne", "Centre", "Champagne-Ardenne", "Corse", "Franche-Comté", "Haute-Normandie", "Ile-de-France", "Languedoc-Roussillon", "Limousin", "Lorraine", "Midi-Pyrénées", "Nord-Pas-de-Calais",
				"Pays de la Loire", "Picardie", "Poitou-Charentes",	"Provence-Alpes-Côte d'Azur",
				"Rhône-Alpes", "Guadeloupe", "Martinique", "Guyane", "Réunion"];

			for ($i=0; $i < 200; $i++) {
				DB::table('individu')->insert([
					'nom' => $faker->lastName,
		        	'prenom' => $faker->firstName,
		        	'date_naiss' => $faker->dateTime(),
		        	'cat_socio_pro' => $faker->jobTitle,
		        	'rue' => $faker->streetAddress,
		        	'code_postal' => rand(1,99999),
		        	'ville' => $faker->city,
		        	'departement' => $departements[rand(0,24)],
		        	'num_phone' => $faker->e164PhoneNumber,
		        	'email' => $faker->unique()->email,
		        	'carac_socio_com' => $caracteristique_commerciale[rand(0,2)]
		        ]);
		    }
    }
}
