<?php

namespace App\Http\Controllers;
use App\Avis;
use App\Lieux;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function viewHomepage(){

        $lieux = Lieux::all();
        return view('homepage', ['lieux'=>$lieux]);
    }

    public function viewVillesList(){
        //$villesList = Lieux::all();
        $villesList = DB::table('lieux')->distinct()->get(['ville']); 
        return view('villeslist', ['villesList'=>$villesList]);
        
    }

    public function viewLieuxList($nomVille){
        //$listeLieux = Lieux::select('select * from lieux where ville = "Mulhouse" ');
        $listeLieux = DB::table('lieux')->where('ville', $nomVille )->get();
        //$listeLieux = Lieux::all();
        return view('LieuxList', ['listeLieux'=>$listeLieux]);
    }

    public function viewLieuInteret($nomLieu){
        $lieu = DB::table('lieux')->where('nom', $nomLieu )->get();
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


}
