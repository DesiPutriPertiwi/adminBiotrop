<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LichenHerbaController extends Controller
{
    protected function index()
    {
        return view('herbarium/lichenherba/index');
    }

    protected function create()
    {
        return view('herbarium/lichenherba/createAuthor');
    }

    protected function createnext()
    {
        /*$this -> validateInput($request);
        WeedHerba:: create([
            'name_collector'=> $request['name_collector'],
            'tim_collector' => $request['tim_collector'],
            'date_collector' => $request['date_collector'],
            'number_collection'=> $request['number_collection'],
            'name_state' => $request['name_state'],
            'name_province' => $request['name_province']
            'name_city'=> $request['name_city'],
            'name_district' => $request['name_district'],
            'name_vilage' => $request['name_vilage'],
            'latitude'=> $request['latitude'],
            'longitude' => $request['longitude'],
            'atitude' => $request['atitude'],
            'name_author'=> $request['name_author'],
            'email_author' => $request['email_author'],
            'date_author' => $request['date_author'],
            'institude_agency' => $request['institude_agency']
        ]);
        return redirect()-> intended('/herbarium/weedherba/createSpecimen');*/
        return view('herbarium/lichenherba/createSpecimen');
    }

    protected function store()
    {
        $this -> validateInput($request);
        ForestHerba:: create([
            'name_family'=> $request['family'],
            'name_genus' => $request['genus'],
            'name_species' => $request['name_species']

        ]);
        return redirect()-> intended('/herbarium/lichenherba');
    }

    protected function show()
    {

    }
}
