<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProspectionController extends Controller
{
    public function insertion_articles(Request $request)
    {
    	$designation = $request->input('designation');

    	return $designation;
    	die();
    }
}
