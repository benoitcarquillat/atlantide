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

    public function viewVillesListAll(){
        $villesListGlobal = Lieux::all();
        $villesListGlobal = DB::table('lieux')->distinct(['ville'])->get();
        //$villesList2 = DB::table('evenement')->distinct()->get(['ville']); 
        //dd($villesList);
        //$villesList2 = DB::table('evenement')->distinct()->get(['ville']);
        //$totalVillesList = $villesList->concat($villesList2);
        return view('villesListGlobal', ['villesListGlobal'=>$villesListGlobal]);
    }
    public function viewVillesList($nomVille){
        $lieux = DB::table('lieux')->where('ville', $nomVille )->get();
        $evenements = DB::table('evenement')->where('ville', $nomVille )->get();
        //$totalVillesList = $listeLieux->concat($evenementsList);
        return view('villesList', ['lieux'=>$lieux,'evenements'=>$evenements]);
    }

    public function viewLieuxListVille($nomVille){
        //$listeLieux = Lieux::select('select * from lieux where ville = "Mulhouse" ');
        $listeLieux = DB::table('lieux')->where('ville', $nomVille )->get();
        //$listeLieux = Lieux::all();
        return view('LieuxListVille', ['listeLieuxVille'=>$listeLieux]);
    }

    public function viewEvenementsListVille($nomVille){
        //$listeLieux = Lieux::select('select * from lieux where ville = "Mulhouse" ');
        $evenementsList = DB::table('evenement')->where('ville', $nomVille )->get();
        //$listeLieux = Lieux::all();
        return view('evenementsListVille', ['evenementsListVille'=>$evenementsList]);
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




}
