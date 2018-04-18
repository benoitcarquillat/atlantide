<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function viewHomepage(){
        return view('homepage');
    }

    public function viewDestination(){
        return view('Destination');
    }

    public function viewLieuxList(){
        return view('LieuxList');
    }

    public function viewLieuInteret($nomPays, $nomLieuInteret){
        return view('LieuInteret', ['pays'=>$nomPays, 'lieuInteret'=>$nomLieuInteret]);
    }

    public function viewMonumentsList(){
        return view('MonumentsList');
    }

    public function viewRestaurantsList(){
        return view('RestaurantsList');
    }

    public function viewBoutiquesList(){
        return view('BoutiquesList');
    }

    public function viewLieuxCulturelsList(){
        return view('LieuxCulturelsList');
    }

    public function viewEvenementsList(){
        return view('EvenementsList');
    }

    public function viewPays($nomPays){
        return view('singlePays', ['pays'=> $nomPays]);
    }

    public function viewVille($nomVille){
        return view('singleVille', ['ville'=> $nomVille]);
    }
}
