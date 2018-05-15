<?php

namespace App\Http\Controllers;
use App\Evenement;
use Illuminate\Http\Request;

class ControllerEvenement extends Controller
{
    public function viewAll(){
        $all= Evenement::all();
        return view('evenements',["evenements" => $all]);
    }
    function view($id){
        $e= Evenement::find($id);
        if(!$e){
            return redirect("404");
        }
        return view('evenement',["evenement" => $e]);
    }
}
