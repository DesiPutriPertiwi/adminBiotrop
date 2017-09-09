<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Routing\ResponseFactory;
use Intervention\Image\ImageManagerStatic as Image;
use App\Model\Collector;
use App\Model\AuthorIdent;
use App\Model\State;
use App\Model\Province;
use App\Model\District;
use App\Model\City;
use App\Model\Location;
use App\Model\Herbarium;
use App\Model\Species;
use App\Model\CharacterSpecies;
use App\Model\HerbariumType;
use App\Model\Duplicate;
use App\Model\Family;
use App\Model\Genus;
use App\Model\Vernacular;
use App\Model\Verified;
use View;
use DateTime;


class WeedHerbaController extends Controller
{
     protected function index()
     {
         $speciment_herbarium = DB::table('speciment_herbarium')
         ->join('species', 'speciment_herbarium.species_id', '=', 'species.id_species')
         ->join('users', 'speciment_herbarium.user_id', '=', 'users.id')
         ->join('verified', 'speciment_herbarium.verifiedData_id', '=', 'verified.id_verified')
         ->join('collector', 'speciment_herbarium.collector_id', '=', 'collector.id_collector')
         ->join('herbarium_type', 'speciment_herbarium.type_herbarium', '=', 'herbarium_type.id_type')
         ->join('author_identification', 'speciment_herbarium.authorIdentification_id', '=', 'author_identification.id_author')
         ->select('speciment_herbarium.*', 'species.name_species', 'users.user_type', 'herbarium_type.type',  'collector.name_collector', 'author_identification.name_author', 'verified.status')
         ->paginate(5);
        // dd($speciment_herbarium);
        return view('herbarium/weedherba/index', ['speciment_herbarium'=> $speciment_herbarium]);
        
     }
     
     protected function create()
     {
         
         return view('herbarium/weedherba/createAuthor');
     }

     public function createnext(Request $request)
     {
        $collect = new Collector;
        $collect -> name_collector                     = $request -> input('name_collector');
        $collect -> tim_collector                      = $request -> input('tim_collector');
        $collect -> date_collection                    = $request -> input('date_collector');
        $collect -> number_collection                  = $request -> input('number_collector');   
        $collect -> save();

        $author = new AuthorIdent;
        $author  -> name_author                       = $request -> input('name_author');
        $author  -> email_author                      = $request -> input('email_author');
        $author  -> phone_author                      = $request -> input('phone_author');
        $author  -> date_ident                        = $request -> input('date_ident');
        $author  -> agency                            = $request -> input('agency');
        $author  -> save();
        
        $location = new Location;
        $location -> latitude                           = $request -> input('latitude');
        $location -> longitude                          = $request -> input('longitude');
        $location -> atitude                            = $request -> input('atitude');
        $location -> district_id                        = $request -> input('id_district');
        $location -> vilage                             = $request -> input('name_vilage');
        $location -> save();

        $data   = ['collect'=>$collect->id_collector, 'author'=>$author->id_author, 'location'=>$location->id_location];
    //    dd($data);
        return view('/herbarium/weedherba/createSpecimen', ['data' =>$data]);
     }

    public function store(Request $request)
    {

        // dd($request);
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $request->file('image')->move("herba/",$fileName);

        if ($request->file('image2') != null){
            $file1 = $request->file('image2');
            $fileName1 = $file1->getClientOriginalName();
            $request->file('image2')->move("herba/",$fileName1);
        }else{ 
            $fileName1 =null;
        }

        if ($request->file('image3') != null){
            $file2 = $request->file('image3');
            $fileName2 = $file2->getClientOriginalName();
            $request->file('image3')->move("herba/",$fileName2);
        }else{ 
            $fileName2 =null;
        }

        if ($request->file('image4') != null){
             $file3 = $request->file('image4');
            $fileName3 = $file3->getClientOriginalName();
            $request->file('image4')->move("herba/",$fileName3);
        }else{ 
            $fileName3 =null;
        }

        if ($request->file('image5') != null){
              $file4 = $request->file('image5');
            $fileName4 = $file4->getClientOriginalName();
            $request->file('image5')->move("herba/",$fileName4);
        }else{ 
            $fileName4 =null;
        }

        if ($request->file('image6') != null){
             $file5 = $request->file('image6');
            $fileName5 = $file5->getClientOriginalName();
            $request->file('image6')->move("herba/",$fileName5);
        }else{ 
            $fileName5 =null;
        }

        $charac   = new CharacterSpecies;
        $charac   -> picture_species                                = $fileName;
        $charac   -> picture_species2                               = $fileName1;
        $charac   -> picture_species3                               = $fileName2;
        $charac   -> picture_species4                               = $fileName3;
        $charac   -> picture_species5                               = $fileName4;
        $charac   -> picture_species6                               = $fileName5;
        $charac   -> save();

        $dupt = new Duplicate;
        $dupt -> dupt_form                                  = $request     ->input('dupt_from');
        $dupt -> dupt_send                                  = $request     ->input('dupt_send');
        $dupt -> number_form                                = $request     ->input('num_form');
        $dupt -> number_send                                = $request     ->input('num_send');
        $dupt -> number_duptAll                             = $request     ->input('num_dupt');
        $dupt -> save();

        $family = new Family;
        $family -> name_family                              = $request     ->input('family');
        $family -> save();
        
        $genus = new Genus;
        $genus -> name_genus                                = $request     ->input('genus');
        $genus -> family_id                                 = $family      ->id_family;
        $genus -> save();
        
        
        $vena = new Vernacular;
        $vena -> venacular_name                             = $request     ->input('venacular_name');
        $vena -> save();

        $species = new Species;
        $species -> name_species                               = $request     ->input('species');
        $species -> subspecies                                 = $request     ->input('subspecies');
        $species -> variety                                    = $request     ->input('variety');
        $species -> origin_species                             = $request     ->input('origin_species');
        $species -> species_synonim                            = $request     ->input('species_synonim');
        $species -> vernacular_id                              = $vena        ->id_venacular;
        $species -> description_species                        = $request     ->input('description_species');
        $species -> genus_id                                   = $genus       ->id_genus;
        $species -> character_id                               = $charac      ->id_character;
        $species -> save();
    
        $verif  = new Verified;
        $verif  -> status                                          = "0";
        $verif  ->save();

        $herbarium = new Herbarium;
        $herbarium -> label                                       = $request    ->input('label_weed');
        $herbarium -> duplicate_id                                = $dupt       ->id_dupt;
        $herbarium -> notes                                       = $request    ->input('notes');         
        $herbarium -> species_id                                  = $species    ->id_species;
        $herbarium -> type_herbarium                              = "1";
        $herbarium -> verifiedData_id                             = $verif ->id_verified;
        $herbarium -> location_id                                 = $request    ->input('data1');
        $herbarium -> collector_id                                = $request    ->input('data2');
        $herbarium -> authorIdentification_id                     = $request    ->input('data3');
        $herbarium -> user_id                                     = $request    ->input('user');
        $herbarium  -> save();
        
        return redirect()-> intended('/herbarium-management/weedherba');
    }
    
    // protected function cedit($id_collect)
    // {
    //     $speciment_herbarium = Herbarium::find($id_collect);
    //     if ($speciment_herbarium == null || count($speciment_herbarium) == 0) {
    //         return redirect()->intended('/herbarium-management/weedherba');
    //     }
    //     $state = $speciment_herbarium->location->districts->city->prov->state->orderBy('name', 'asc')->get();
    //     return view('herbarium/weedherba/edit', ['speciment_herbarium' => $speciment_herbarium, 'state' => $state]);
    // }

   
    public function update(Request $request, $id_herba)
    {
       
        // dd($request);
        $speciment_herba = Herbarium::Find($id_herba);
        
        $collect = Collector::where('id_collector', $speciment_herba->collector_id)->first();
        $collect -> name_collector                     = $request -> input('name_collector');
        $collect -> tim_collector                      = $request -> input('tim_collector');
        $collect -> date_collection                    = $request -> input('date_collector');
        $collect -> number_collection                  = $request -> input('number_collector');   
        $collect -> save();

        $author = AuthorIdent::where('id_author', $speciment_herba->authorIdentification_id)->first();
        $author  -> name_author                       = $request -> input('name_author');
        $author  -> email_author                      = $request -> input('email_author');
        $author  -> phone_author                      = $request -> input('phone_author');
        $author  -> date_ident                        = $request -> input('date_ident');
        $author  -> agency                            = $request -> input('agency');
        $author  -> save();
        
        $location = Location::where('id_location', $speciment_herba->location_id)->first();
        $location -> latitude                           = $request -> input('latitude');
        $location -> longitude                          = $request -> input('longitude');
        $location -> atitude                            = $request -> input('atitude');
        $location -> district_id                        = $request -> input('id_district');
        $location -> vilage                             = $request -> input('name_vilage');
        // dd($location);
        $location -> save();
        $data =['collect'=>$collect->id_collector, 'author'=>$author->id_author, 'location'=>$location->id_location];
        return view('/herbarium/weedherba/edits',['speciment_herbarium' => $speciment_herba, 'data'=>$data]);
    }

    protected function edit($id_herba)
    {
        $speciment_herbarium = Herbarium::find($id_herba);
        if ($speciment_herbarium == null || count($speciment_herbarium) == 0) {
            return redirect()->intended('/herbarium-management/weedherba');
        }
        $collect = $speciment_herbarium->collector_id->get();
        $author  = $speciment_herbarium->authorIdentification_id->get();
        $location= $speciment_herbarium->location_id->get();
        $data =['collect'=>$collect->id_collector, 'author'=>$author->id_author, 'location'=>$location->id_location];
        // dd($data);
        return view('herbarium/weedherba/update', ['speciment_herbarium' => $speciment_herbarium]);
    }

     protected function updatestep(Request $request, $id_herba)
    {
        // dd($request);
        $speciment_herba  = Herbarium::Find($id_herba);
        $speciment_herba -> label                                       = $request    ->input('label_weed');
        $speciment_herba -> notes                                       = $request    ->input('notes');      
        $speciment_herba -> location_id                                 = $request    ->input('data1');
        $speciment_herba -> collector_id                                = $request    ->input('data2');
        $speciment_herba -> authorIdentification_id                     = $request    ->input('data3');
        $speciment_herba -> user_id                                     = $request    ->input('user');
        $speciment_herba -> save();
        
        $species    = Species::where('id_species', '=', $speciment_herba->species_id)->first();
        $species   -> name_species                            = $request   ->input('species');
        $species   -> species_synonim                         = $request   ->input('synonim');
        $species   -> origin_species                          = $request   ->input('origin');
        $species   -> description_species                     = $request   ->input('description');
        $species   -> subspecies                              = $request     ->input('subspecies');
        $species   -> variety                                 = $request     ->input('variety');
        $species   -> save();
        
        $vena       = Vernacular::where('id_venacular', '=', $species->vernacular_id)->first();
        $vena       -> venacular_name                         = $request    ->input('venacular_name'); 
        $vena       -> save();

        $dupt = Duplicate::where('id_dupt', '=',$speciment_herba->duplicate_id)->first();
        $dupt -> dupt_form                                  = $request     ->input('dupt_form');
        $dupt -> dupt_send                                  = $request     ->input('dupt_send');
        $dupt -> number_form                                = $request     ->input('num_form');
        $dupt -> number_send                                = $request     ->input('num_send');
        $dupt -> number_duptAll                             = $request     ->input('num_dupt');
        $dupt -> save();
        // dd($dupt);

        $genus   = Genus::where('id_genus', '=', $species->genus_id)->first();
        $genus   -> name_genus                                = $request   ->input('genus');
        $genus   -> save();
        
        $family   = Family::where('id_family', '=', $genus->family_id)->first();
        $family   -> name_family                              = $request    ->input('family');
        $family   -> save();

        if ($request->file('image2') != null){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $request->file('image')->move("ias/",$fileName);
        }else{
            $fileName =null;
        }

        if ($request->file('image2') != null){
            $file1 = $request->file('image2');
            $fileName1 = $file1->getClientOriginalName();
            $request->file('image2')->move("herba/",$fileName1);
        }else{ 
            $fileName1 =null;
        }

        if ($request->file('image3') != null){
            $file2 = $request->file('image3');
            $fileName2 = $file2->getClientOriginalName();
            $request->file('image3')->move("herba/",$fileName2);
        }else{ 
            $fileName2 =null;
        }

        if ($request->file('image4') != null){
             $file3 = $request->file('image4');
            $fileName3 = $file3->getClientOriginalName();
            $request->file('image4')->move("herba/",$fileName3);
        }else{ 
            $fileName3 =null;
        }

        if ($request->file('image5') != null){
              $file4 = $request->file('image5');
            $fileName4 = $file4->getClientOriginalName();
            $request->file('image5')->move("herba/",$fileName4);
        }else{ 
            $fileName4 =null;
        }

        if ($request->file('image6') != null){
            $file5 = $request->file('image6');
            $fileName5 = $file5->getClientOriginalName();
            $request->file('image6')->move("herba/",$fileName5);
        }else{ 
            $fileName5 =null;
        }

        $charac   = CharacterSpecies::where('id_character', '=', $species->character_id)->first();
        $charac   -> picture_species                                = $fileName;
        $charac   -> picture_species2                               = $fileName1;
        $charac   -> picture_species3                               = $fileName2;
        $charac   -> picture_species4                               = $fileName3;
        $charac   -> picture_species5                               = $fileName4;
        $charac   -> picture_species6                               = $fileName5;
        $charac   -> save();

        return redirect()->intended('/herbarium-management/weedherba');
    }

    public function destroy($id_herba)
    {
        // dd($id_herba);
        $speciment_herba = Herbarium::where('id_herbarium', $id_herba);
        if ($speciment_herba == null || count($speciment_herba) == 0) {
            return redirect()->intended('/herbarium-management/weedherba');
        }
         $speciment_herba  ->delete();
        
         return redirect()->intended('/herbarium-management/weedherba')->with(['message'=> 'Successfully deleted!!']);
    }


    protected function editnext()
    {
        return view('herbarium/weedherba/editSpeciment');
    }

    protected function show($id_herba)
    {
        //  dd($id_herba);
        $speciment_herba= Herbarium::find($id_herba);
        
        return view('herbarium/weedherba/show', ['speciment_herbarium' => $speciment_herba]);
    }
    
    public function search(Request $request) {
        $constraints = [
            'username'      => $request['username'],
            'firstname'     => $request['firstname'],
            'lastname'      => $request['lastname'],
            'department'    => $request['department']
            ];

       $users = $this->doSearchingQuery($constraints);
       return view('users-mgmt/index', ['users' => $users, 'searchingVals' => $constraints]);
       
    }
    
     public function showlabel($id_herba) 
     {
        $herba= Herbarium::find($id_herba);
        return view('herbarium/weedherba/label', ['herba' => $herba]);
     } 

    public function destination(Request $request){
        $state = State::orderBy('name', 'asc')->get();   
        return view('herbarium.weedherba.createAuthor', ['state' => $state]);
       // dd($request);
    }

    public function findProv(Request $request)
    {
        $data= Province::select('name', 'id_prov')
            ->orderBy('name', 'asc')
            ->where('state_id', $request->id)
            ->get();
        return response()->json($data);
       // dd($request);
    }

    public function findCity(Request $request)
    {
        $data1= City::select('name', 'id_city')
            ->orderBy('name', 'asc')
            ->where('prov_id', $request->id_prov)
            ->get();
        return response()->json($data1);
       // dd($request);
    }

    public function findDists(Request $request)
    {
        $data2= District::select('name', 'id_districts')
            ->orderBy('name', 'asc')
            ->where('city_id', $request->id_citys)
            ->get();
        return response()->json($data2);
       // dd($request);
    }

     private function validateInput($request) {
        $this->validate($request, [
            'family'            => 'required|max:50',
            'genus'             => 'required|max:50',
            'species'           => 'required|max:50',
            'synonim'           => 'max:1000',
            'name_collector'    => 'required|max:50',
            'date_collector'    => 'required',
            'number_collector'  => 'required',
            'name_author'       => 'required',
            'email_author'      => 'max:60',
            'phone_author'      => 'max:15',
            'date_ident'        => 'required',
            'agency'            => 'max:500',
            'latitude'          => 'max:10',
            'longitude'         => 'max:1000',
            'atitude'           => 'max:1500',
            'name_vilage'       => 'max:70',
            'dupt_from'         => 'max:50',
            'dupt_send'         => 'max:50',
            'num_dupt'          => 'max:50',
            'num_form'          => 'max:3',
            'num_send'          => 'max:3',
            'utilization'       => 'max:3',
            'venacular_name'    => 'max:1500',
            'subspecies'        => 'max:50',
            'origin_species'    => 'max:50',
            'species_synonim'   => 'max:50',
            'description_species'=> 'max:50',
            'label_weed'        => 'max:10',
            'notes'             => 'max:1500',
            'gambar[1]'         => 'image|mimes:jpeg,bmp,png,jpg',
            'gambar[2]'         => 'image|mimes:jpeg,bmp,png,jpg',
            'gambar[3]'         => 'image|mimes:jpeg,bmp,png,jpg',
            'gambar[4]'         => 'image|mimes:jpeg,bmp,png,jpg',
            'gambar[5]'         => 'image|mimes:jpeg,bmp,png,jpg',
            'gambar[6]'         => 'image|mimes:jpeg,bmp,png,jpg',
        ]);
     }
}