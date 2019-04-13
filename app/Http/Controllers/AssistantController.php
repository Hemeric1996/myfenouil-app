<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AssistantController extends Controller
{
  public function addcmd(Request $request)
    {
      $id_client = $request->input('id_client');
      $article = $request->input('article');
      //$prix = $request->input('prix');
      $quantite = $request->input('quantite');
      

      DB::insert('INSERT INTO commandes (identifiantClient, numeroArticle, quantite) VALUES (?, ?, ?)', [$id_client, $article, $quantite]);
    }

    /*public function valider(Request $request)
    {
      $cmds = $request->all();
      foreach ($cmds['commandes'] as $cmd) {
        // var_dump($cmd['article']);
        DB::table('commandes')
          ->insert(['identifiantClient' => $cmd['id_client'], 'numeroArticle' => $cmd['article'], 'prix' => $cmd['prix'] , 'quantite' => $cmd['quantite']]);
      };
      // return redirect('/home');
      // var_dump($cmds);
      // foreach ($cmds["commandes"] as $cmd => $value) {
      //   var_dump($value['article']);
      // }
      // foreach ($cmds["commandes"] as $cmd) {
      //   echo $cmd['article'];
      // }
      // return var_dump($cmds['commandes'][0]['article']);
    }*/

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
