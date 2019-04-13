<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Articles;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      if (Auth::user()->departement == 'prospection') {
        return view('prospection');
      }
      if (Auth::user()->departement == 'assistant') {
        return view('assistant');
      }
      if (Auth::user()->departement == 'responsable') {
        return view('responsable');
      }

      if (Auth::user()->departement == 'gestionnaire') {
        return view('gestionnaire');
      }
    }


    public function add(Request $request)
    {
      $cmd = $request->all();
      // var_dump($cmd);
      // $prix = DB::select('select prix from articles where numeroArticle = ?' ,[$commande['article']]);
      $prix = \DB::table('articles')
                  ->where(
                    [
                      ['numeroArticle', '=', [$cmd['article']]],
                    ]
                    )
                  ->get();
      // return "ok";
      // for (var pri in prix) {
      //   console.log(prix[pri].prix);
      // }
      // $leprix=$prix[0]->prix;
      return $prix[0]->prix;
    }

    public function addart(Request $request)
    {
      $designation = $request->input('designation');
      $prix = $request->input('prix');
      $quantite = $request->input('quantite');

      
      DB::insert('insert into articles (designation, prix, stock) values (?, ?, ?)', [$designation, $prix, $quantite]);      
    }

    public function addad(Request $request)
    {
      //return 'toto';
      $categorie = $request->input('categorie');
      $titre = $request->input('titre');
      $description = $request->input('description');
      $methode_envoie = $request->input('methode_envoie');
      
      DB::insert('insert into publicites (categorie, titre, description, methode_envoie) values (?, ?, ?, ?)', [$categorie, $titre, $description, $methode_envoie]);  

      //SAVE FILE 
      touch('Document.ads');

      $save = fopen('Document.ads', 'a+');
      $heure = date('H:i:s');
      $date = date('d/m/Y');
      fputs($save, "#### CIBLE DE ROUTAGE du " .$date. " à " .$heure. " ####\n");
      fputs($save, "titre, description, departement, age, methode, individu, categorie\n");
      fputs($save, $request->input('titre')."\n");
      fputs($save, $request->input('description')."\n");
      fputs($save, $request->input('departement')."\n");
      fputs($save, $request->input('age')."\n");
      fputs($save, $request->input('methode_envoie')."\n");
      fputs($save, $request->input('type_individu')."\n");
      fputs($save, $request->input('categorie'));
      fclose($save);
      
      $newsave = $request->input('methode_envoie').date('-d_m_Y_H_i_s').".ads";

      rename('Document.ads', $newsave);    
    }

    public function addadxml(Request $request)
    {
      $titre = $request->input('titre');
      $description = $request->input('description');
      $methode_envoie = $request->input('methode_envoie');

      touch('publicite_.xml');

      $monfichier = fopen('publicite_.xml', 'a+');

     
      fputs($monfichier, '<?xml version="1.0" encoding="UTF-8"?>');
      fputs($monfichier, '<publicite>');
      fputs($monfichier, '<titrePublicite>'.$titre.'</titrePublicite>');
      fputs($monfichier, '<descriptionPublicite>'.$description.'</descriptionPublicite>');
      fputs($monfichier, '<methoEnvoiePublicite>'.$methode_envoie.'</methoEnvoiePublicite>');
      fputs($monfichier, '</publicite>');

      fclose($monfichier);

      rename('publicite_.xml', 'publicite_'.date('d_m_Y_H_i_s').".xml"); 


      DB::insert('INSERT INTO publicites (titre, description, methode_envoie) VALUES (?, ?, ?)', [$titre, $description, $methode_envoie]);

      //SAVE FILE 
      touch('Document.ads');

      $save = fopen('Document.ads', 'a+');
      $heure = date('H:i:s');
      $date = date('d/m/Y');
      fputs($save, "#### CIBLE DE ROUTAGE du " .$date. " à " .$heure. " ####\n");
      fputs($save, "titre, description, departement, age, methode, individu, categorie\n");
      fputs($save, $request->input('titre')."\n");
      fputs($save, $request->input('description')."\n");
      fputs($save, $request->input('departement')."\n");
      fputs($save, $request->input('age')."\n");
      fputs($save, $request->input('methode_envoie')."\n");
      fputs($save, $request->input('type_individu')."\n");
      fputs($save, $request->input('categorie'));
      fclose($save);
      
      $newsave = $request->input('methode_envoie').date('-d_m_Y_H_i_s').".ads";
      rename('Document.ads', $newsave);   
    }

    public function sendsms(Request $request)
    {
      $titre = $request->input('titre');
      $description = $request->input('description');
      $methode_envoie = $request->input('methode_envoie');

      DB::insert('INSERT INTO publicites (titre, description, methode_envoie) VALUES (?, ?, ?)', [$titre, $description, $methode_envoie]);

      //SAVE FILE 
      touch('Document.ads');

      $save = fopen('Document.ads', 'a+');
      $heure = date('H:i:s');
      $date = date('d/m/Y');
      fputs($save, "#### CIBLE DE ROUTAGE du " .$date. " à " .$heure. " ####\n");
      fputs($save, "titre, description, departement, age, methode, individu, categorie\n");
      fputs($save, $request->input('titre')."\n");
      fputs($save, $request->input('description')."\n");
      fputs($save, $request->input('departement')."\n");
      fputs($save, $request->input('age')."\n");
      fputs($save, $request->input('methode_envoie')."\n");
      fputs($save, $request->input('type_individu')."\n");
      fputs($save, $request->input('categorie'));
      fclose($save);
      
      $newsave = $request->input('methode_envoie').date('-d_m_Y_H_i_s').".ads";

      rename('Document.ads', $newsave);   
    }

    public function sendmail(Request $request)
    {
      $titre = $request->input('titre');
      $description = $request->input('description');
      $methode_envoie = $request->input('methode_envoie');

      DB::insert('INSERT INTO publicites (titre, description, methode_envoie) VALUES (?, ?, ?)', [$titre, $description, $methode_envoie]);

     //SAVE FILE 
      touch('Document.ads');

      $save = fopen('Document.ads', 'a+');
      $heure = date('H:i:s');
      $date = date('d/m/Y');
      fputs($save, "#### CIBLE DE ROUTAGE du " .$date. " à " .$heure. " ####\n");
      fputs($save, "titre, description, departement, age, methode, individu, categorie\n");
      fputs($save, $request->input('titre')."\n");
      fputs($save, $request->input('description')."\n");
      fputs($save, $request->input('departement')."\n");
      fputs($save, $request->input('age')."\n");
      fputs($save, $request->input('methode_envoie')."\n");
      fputs($save, $request->input('type_individu')."\n");
      fputs($save, $request->input('categorie'));
      fclose($save);
      
      $newsave = $request->input('methode_envoie').date('-d_m_Y_H_i_s').".ads";
      rename('Document.ads', $newsave);   
    }


    /*public function addcmd(Request $request)
    {
      return 'VAR DE DUMP';
      $id_client = $request->input('id_client');
      $article = $request->input('article');
      $prix = $request->input('prix');
      $quantite = $request->input('quantite');

      
      DB::insert('insert into commandes (identifiantClient, numeroArticle, prix, quantite) values (?, ?, ?, ?)', [$id_client, $article, $prix, $quantite]); 
      }


      //$cmds = $request->all();
      //var_dump($cmds);
      // foreach (cmd as $key => $value) {
      //   print "$key => $value\n";
      // }
    }*/

}
