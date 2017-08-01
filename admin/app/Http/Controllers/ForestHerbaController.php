<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForestHerbaController extends Controller
{
    protected function index()
    {
        return view('herbarium/forestherba/index');
    }

    protected function create()
    {
        return view('herbarium/forestherba/createAuthor');
    }

    protected function createNext()
    {
        return view('herbarium/forestherba/createSpecimen');
    }

    protected function store()
    {
        $this -> validateInput($request);
        ForestHerba:: create([
            'name_family'=> $request['family'],
            'name_genus' => $request['genus'],
            'name_species' => $request['name_species']

        ]);
        return redirect()-> intended('/herbarium/forestherba');
    }

    protected function show()
    {

    }
}

