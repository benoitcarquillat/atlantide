<?php

namespace App\Http\Controllers;
use App\Avis;
use App\Lieux;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function viewHomepage(){

        $lieux = Lieux::all();
        return view('homepage', ['lieux'=>$lieux]);
    }

    public function viewVillesList(){
        $villesList = Lieux::all();    
        return view('villeslist', ['villesList'=>$villesList]);
    }

    public function viewLieuxList(){
        $listeLieux = Lieux::all();
        return view('LieuxList', ['lieux'=>$listeLieux]);
    }

    public function viewLieuInteret($id){
        $lieu = Lieux::find($id);
        return view('LieuInteret', ['lieu'=>$lieu]);
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

    public function viewVille($nomVille){
        return view('singleVille', ['Ville'=> $nomVille]);
    }

}
