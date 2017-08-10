<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Invasive;
use App\Model\Species;
use App\Model\Genus;
use App\Model\Family;
use App\Model\ControlIas;
use App\Model\Location;
use App\Model\Verified;
use App\Model\AuthorIdent;
use App\User;

class InvasiveController extends Controller
{
       /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/invasive';

         /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $speciment_ias = Invasive::paginate(10);
        $speciment_ias = DB::table('speciment_ias')
        ->join('species','speciment_ias.species_id', '=', 'species.id_species')
        ->join('control_ias', 'speciment_ias.control_id', '=', 'control_ias.id_controll')
        ->join('location', 'speciment_ias.location_id','=', 'location.id_location')
        ->join('verified', 'speciment_ias.verifiedData_id','=', 'verified.id_verified')
        ->join('author_identification', 'speciment_ias.authorIdentification_id', '=', 'author_identification.id_author')
        ->select('speciment_ias.*', 'name_species', 'contact_person', 'description_species', 'genus_id','vernacular_id','species_synonim', 'habitat', 'ecology', 'character_id', 'origin_species', 'chemical_ctrl', 'manual_ctrl', 'biologycal_ctrl', 'latitude', 'longitude', 'altitude', 'village_id', 'distribution_specimen', 'status_verified','contact_person')
        ->paginate(10);

        // $species = DB::table('species')
        // ->join('genus', 'species.genus_id', '=', 'genus.id_genus')
        // ->join('vernacular', 'species.vernacular_id', '=', 'vernacular.id_vernacular')
        // ->select('species.*', 'name_genus', 'family_id','common_name')
        // ->get();
        
        $genus= DB::table('genus')
        ->join('family', 'genus.family_id','=', 'family.id_family')
        ->get();
        
        // $location = DB::table('location')
        // ->join('village', 'location.village_id','=','village.id_village')
        // ->get();
        
        // $village = DB::table('village')
        // ->join('district', 'village.district_id', '=','district.id_district' )
        // ->get();

        return view('invasive/index', ['speciment_ias' => $speciment_ias]);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $speciment_ias = Invasive::all();
      return view('invasive/create', ['speciment_ias'=> $speciment_ias]);
    }
    public function createdesc()
    {
      $speciment_ias = Invasive::all();
    return view('invasive/createdesc' , ['speciment_ias'=> $speciment_ias]);
    }
    public function createloc()
    {
      $speciment_ias = Invasive::all();
      return view('invasive/createloc', ['speciment_ias'=> $speciment_ias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $newcreate = new Invasive;
      $newcreate -> name_family = $request-> input('family');
      $newcreate -> name_genus = $request-> input('genus');
      $newcreate -> name_species = $request-> input('species');      

        return redirect()->intended('/invasive');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speciment_ias = Invasive::find($id);
        // Redirect to user list if updating user wasn't existed
        if ($speciment_ias == null || count($speciment_ias) == 0) {
            return redirect()->intended('/invasive');
        }

        return view('invasive/edit', ['speciment_ias' => $speciment_ias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $constraints = [
            'username' => 'required|max:20',
            'firstname'=> 'required|max:60',
            'lastname' => 'required|max:60'
            ];
        $input = [
            'username' => $request['username'],
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname']
        ];
        if ($request['password'] != null && strlen($request['password']) > 0) {
            $constraints['password'] = 'required|min:6|confirmed';
            $input['password'] =  bcrypt($request['password']);
        }
        $this->validate($request, $constraints);
        User::where('id', $id)
            ->update($input);

        return redirect()->intended('/invasive-management');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Invasive::where('id_ias', $id_ias)->delete();
         return redirect()->intended('/invasive-management');
    }

    /**
     * Search user from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
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

    private function doSearchingQuery($constraints) {
        $query = User::query();
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where( $fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
    }
    private function validateInput($request) {
        $this->validate($request, [
        'username' => 'required|max:20',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|confirmed',
        'firstname' => 'required|max:60',
        'lastname' => 'required|max:60'
    ]);
    }
}
