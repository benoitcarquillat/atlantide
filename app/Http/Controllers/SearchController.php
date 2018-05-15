<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Lieux;
use App\Evenement;

class SearchController extends Controller
{
    public function getSearch(){

        //get keywords input for search
        $keyword=  Input::get('q');

        //search that location in Database
        $results_location= Lieux::where('nom', 'like', '%' . $keyword . '%')->get(); ;
        
        // On recherche maintenant les évenement 
        $results_event= Evenement::where('nom', 'like', '%' . $keyword . '%')->get();

        //return display search result by using a view
        return view('search', [
            'results'=> $results_location,
            'results_event'=> $results_event
        ]);
    }
}
