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
        $speciment_ias = DB::table('speciment_ias')
        ->leftJoin('species', 'speciment_ias.species_id', '=', 'species_id')
        ->leftJoin('control_ias', 'speciment_ias.control_id', '=', 'control_id')
        ->leftJoin('location', 'speciment_ias.location_id','=', 'location_id')
        ->leftJoin('verified', 'speciment_ias.verifiedData_id','=', 'verifiedData_id')
        ->leftJoin('author_identification', 'speciment_ias.authorIdentification_id', '=', 'authorIdentification_id')
        ->select('speciment_ias.*', 'species.name_species as species','species.id_species as id_species', 'species.origin_species as origin','species.habitat as invaded_habitat',
        'species.species_synonim as synonim', 'species.genus_id as genus_id', 'genus.id_genus as genus_id','genus.name_genus as genus', 'genus.family_id as family_id', 'family.name_family as family',
        'speciment_ias.id_ias',' speciment_ias.prevention', 'speciment_ias.utilization', 'speciment_ias.risk_analisis', 'speciment_ias.reference', 'control_ias.id_controll as id_controll', 'control_ias.chemical_ctrl as chemical_ctrl',
        'control_ias.manual_ctrl as manual_ctrl', 'control_ias.biologycal_ctrl as biologycal_ctrl' , 'author_identification.name_author as contact', 'verified.status_verified as status_verified' ,
        'species.vernacular_id as vernacular_id','vernacular.id_vernacular as vernacular_id', 'vernacular.common_name as common_name', 'species.description_species as description', 'location.id_location as location_id', 'location.distribution_specimen as distribution',
        'species.ecology as ecology')
        ->paginate(10);
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
        $this->validateInput($request);
         Invasive::create([
            'family' => $request['family'],
            'genus'=> $request['genus'],
            'species'=> $request['species'],
            'synonim' => $request['synonim'],
            'common_name' => $request['common_name'],
            'invaded_habitat' => $request['invaded_habitat'],
            'description' => $request['description'],
            'distribution' => $request['distribution'],
            'ecology' => $request['ecology'],
            'chemical_ctrl' => $request['chemical_ctrl'],
            'manual_ctrl' => $request['manual_ctrl'],
            'biologycal_ctrl' => $request['biological_ctrl'],
            'prevention' => $request['prevention'],
            'utilization' => $request['utilization'],
            'risk_analisis' => $request['risk_analisis'],
            'contact' => $request['contact'],
            'reference' => $request['reference'],
          //   dd($family, $genus, $species, $synonim, $common_name, $description, $invaded_habitat, $distribution
          //   ,$ecology, $chemical_ctrl, $manual_ctrl, $biological_ctrl, $prevention, $utilization, $risk_analisis, $contact,$reference),
          //  //Proses mendapatkan judul dan memindahkan letak gambar ke folder image
          //   $file = $request -> file ('gambar'),      //untuk mendapatkan gambar
          //   $fileName =$file -> getCLientOriginName(), // untuk mendapatkan nama asli gambar
          //   $request->file('gambar')-> move("image/", $fileName), //untuk memindahka gambar ke folsder yang telah disediakan
           //
          //   'gambar' => $fileName,
          //    save()
        ]);
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
        Invasive::where('id', $id)->delete();
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
