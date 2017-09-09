<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Herbarium;
use App\Model\Family;
use App\Model\Genus;
use App\Model\Species;
use Illuminate\Support\Facades\DB;

class InvasiveViewController extends Controller
{
    public function index() {
        $speciment_ias = DB::table('speciment_ias')
        ->join('species', 'speciment_ias.species_id', '=', 'species.id_species')
        ->join('genus', 'species.genus_id', '=', 'genus.id_genus')
        ->join('family', 'genus.family_id', '=', 'family.id_family')
        ->join('control_ias', 'speciment_ias.control_id', '=', 'control_ias.id_controll')
        ->join('verified', 'speciment_ias.verifiedData_id', '=', 'verified.id_verified')
        ->select(
                'speciment_ias.*',
                'species.name_species', 
                'species.habitat', 
                'control_ias.chemical_ctrl', 
                'control_ias.manual_ctrl', 
                'control_ias.biologycal_ctrl', 
                'genus.name_genus', 
                'family.name_family', 
                'verified.status', 
                'species.species_synonim', 
                'species.origin_species', 
                'species.description_species', 
                'species.ecology');
        // dd($speciment_ias);
        
        $family         = $speciment_ias->name_family->count();
        dd($family);
        $data['tasks'] = [
                [
                        'name' => 'Family',
                        'progress' => '37',
                        'color' => 'danger'
                ],
                [
                        'name' => 'Genus',
                        'progress' => '76',
                        'color' => 'primary'
                ],
                [
                        'name' => 'Species',
                        'progress' => '32',
                        'color' => 'success'
                ]
        ];
        return view('dashboard_view/invasive/invasiveView')->with($data);
    }
}
