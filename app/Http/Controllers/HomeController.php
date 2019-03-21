<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Articles;
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
        // return view('prospection');
    }


    public function add(Request $request)
    {

      $cmd = $request->all();
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

}
