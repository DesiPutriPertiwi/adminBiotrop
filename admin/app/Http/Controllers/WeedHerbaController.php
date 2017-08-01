<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Herbarium;

class WeedHerbaController extends Controller
{
     protected function index()
     {
         return view('herbarium/weedherba/index');
     }

     protected function create()
     {
         return view('herbarium/weedherba/createAuthor');
     }

     protected function create1()
     {
         return view('herbarium/weedherba/createAuthor');
     }

     protected function createNext()
     {
        /*$this -> validateInput($request);
        WeedHerba:: create([
            'name_family'=> $request['family'],
            'name_genus' => $request['genus'],
            'name_species' => $request['name_species']
        ]);
        return redirect()-> intended('/herbarium/weedherba/create');*/
        return view('herbarium/weedherba/createSpecimen');
     }

    protected function store()
    {
        $this -> validateInput($request);
        WeedHerba:: create([
            'name_family'=> $request['family'],
            'name_genus' => $request['genus'],
            'name_species' => $request['name_species']
        ]);
        return redirect()-> intended('/herbarium/weedherba');
    }

    protected function show()
    {

    }
}
