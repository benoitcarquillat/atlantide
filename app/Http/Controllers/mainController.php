<?php

namespace App\Http\Controllers;
use App\Avis;
use App\Lieux;
use App\Evenement;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function viewHomepage(){

        $lieux = DB::table('lieux')->take(4)->get();
        $evenements = DB::table('evenement')->take(4)->get();

        return view('homepage', [
            'lieux'=>$lieux,
            'evenements'=>$evenements,
        ]);
    }

    public function viewVillesList(){
        $villesList = Lieux::all();
        $villesList = DB::table('lieux')->distinct()->get(['ville']);
        //$villesList2 = DB::table('evenement')->distinct()->get(['ville']); 
        //dd($villesList);
        $villesList2 = DB::table('evenement')->distinct()->get(['ville']);
        $totalVillesList = $villesList->concat($villesList2);
        return view('villesList', ['villesList'=>$totalVillesList]);
        dd($totalVillesList);

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

    public function viewEvenement($nomEvenement){
        $evenement = DB::table('evenement')->where('nom', $nomEvenement )->get();
        return view('evenement', ['evenement'=>$evenement]);
    }

    public function viewLieuListGlobal(){
        $lieuxListGlobal = Lieux::all();
        return view('LieuxListGlobal', ['lieuxListGlobal'=>$lieuxListGlobal]);
    }

    public function viewEvenementsListGlobal(){
        $evenementsListGlobal = evenement::all();
        return view('evenementsListGlobal', ['evenementsListGlobal'=>$evenementsListGlobal]);
    }



    public function viewEvenementsList(){
        return view('EvenementsList');
    }


}
