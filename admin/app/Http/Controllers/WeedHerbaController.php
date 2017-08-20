<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Collector;
use App\Model\AuthorIdent;
use App\Model\State;
use App\Model\Province;
use App\Model\District;
use App\Model\City;
use View;

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

     protected function createnext(Request $request)
     {
        //dd($request);
        $data_set = new Collector;
        $data_set -> name_collector                     = $request -> input('name_collector');
        $data_set -> tim_collector                      = $request -> input('tim_collector');
        $data_set -> date_collection                    = $request -> input('date_collector');
        $data_set -> number_collection                  = $request -> input('number_collector');   

 
        $data_set2 = new AuthorIdent;
        $data_set2 -> name_author                       = $request -> input('name_author');
        $data_set2 -> email_author                      = $request -> input('email_author');
        $data_set2 -> phone_author                      = $request -> input('phone_author');
        $data_set2 -> date_ident                        = $request -> input('date_ident');
        $data_set2 -> agency                            = $request -> input('agency');
       
        
        $data_set -> save();
        $data_set2 -> save();
        
        /*return redirect()-> intended('/herbarium/weedherba/createSpecimen');*/
        return view('/herbarium/weedherba/createSpecimen');
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
        //dd('$this');
        return redirect()-> intended('/herbarium/weedherba');
    }
    
    protected function edit()
    {
        return view('herbarium/weedherba/editAuthor');
    }

    protected function editnext()
    {
        return view('herbarium/weedherba/editSpeciment');
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
    
     public function showlabel() {
         return view('herbarium/weedherba/label');
    } 

    public function destination(){
        
        $state = State::orderBy('name', 'asc')->get();   
        return view('herbarium.weedherba.createAuthor', ['state' => $state]);
    }

    public function findDestination(Request $request)
    {
        $data= Destination::select('prov', 'id_prov')-> where ('state_id', $request->id_state)->get();
        return response()->json($data);
    }
}
