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

     protected function createnext()
     {
        /*$this -> validateInput($request);
        WeedHerba:: create([
            'name_collector'=> $request['name_collector'],
            'tim_collector' => $request['tim_collector'],
            'date_collector' => $request['date_collector'],
            'number_collection'=> $request['number_collection'],
            'name_state' => $request['name_state'],
            'name_province' => $request['name_province'],
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
        return view('herbarium/weedherba/createSpecimen');
     }

    protected function store()
    {
        $this -> validateInput($request);
        WeedHerba:: create([
            'type_status' => $request['type_status'],
            'label_weed'=> $request['label_weed'],
            'name_family'=> $request['family'],
            'name_genus' => $request['genus'],
            'name_herbarium' => $request['name_herbarium'],
            'subspecies' => $request['subspecies'],
            'forma' => $request['forma'],
            'origin_species' => $request['origin_species'],
            'species_synonim' => $request['species_synonim'],
            'venacular_name' => $request['venacular_name'],
            'venacular_name_indo' => $request['venacular_name_indo'],
            'venacular_name_local' => $request['venacular_name_local'],
            'habitat' => $request['habitat'],
            'phenology' => $request['phenology'],
            'ecology' => $request['ecology'],
            'biology' => $request['biology'],
            'habitus' => $request['habitus'],
            'description_leaf' => $request['description_leaf'],
            'description_root' => $request['description_root'],
            'description_fruit'=> $request['description_fruit'],
            'description_steam' => read_exif_data['description_steam'],
            'agricimport' =>$request['agricimport'],
            'inflorencence' => $request['inflorencence'],
            'picture' => $request['picture']
        ]);
        return redirect()-> intended('/herbarium/weedherba');
    }

    protected function show()
    {
        return view('herbarium/weedherba/show');
    }
    
    public function search(Request $request) {
        $constraints = [
            'username' => $request['username'],
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'department' => $request['department']
            ];

       $users = $this->doSearchingQuery($constraints);
       return view('users-mgmt/index', ['users' => $users, 'searchingVals' => $constraints]);
    }
    
}
