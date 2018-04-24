<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lieux;

class SearchController extends Controller
{
    public function getSearch($request){
        $query = $request->get('q');

        $result = $query ? Lieux::search($query)->orderBy('id', 'desc')->paginate(10) : Lieux::all();
        return view('search', compact('lieux'));
    }
}
