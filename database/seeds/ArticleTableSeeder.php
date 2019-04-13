<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $article = ["Lunettes protectrices", "Gants", "Masque", "Trousse perceuse - tournevis", "Ciseaux", "Une règle", "Un niveau à bulle", "Des grattoirs et spatules", "Rubans adhésifs", "Ensemble de peinture", "Ponceuse + du papier de verre", "Scie circulaire", "Ensemble de clous et vis", "Colles Liquitex","Pistolet à colle chaude et bâtons de colle","Kit de couture","Peinture en aérosol","Peinture à la craie et cire molle","Agrafeuse"];

			for ($i=0; $i < 25; $i++) {
				DB::table('articles')->insert([
					'designation' => $article[rand(0,18)],
		        	'prix' => rand(1,125),
		        	'stock' => rand(2,500)
		        ]);
			}
    }
}
