<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Herbarium;
use App\Model\Family;
use App\Model\Genus;
use App\Model\Species;
use Illuminate\Support\Facades\DB;

class WeedViewController extends Controller
{
    public function index() {
        $speciment_herbarium = DB::table('speciment_herbarium')
         ->join('species', 'speciment_herbarium.species_id', '=', 'species.id_species')
         ->join('genus', 'species.genus_id', '=', 'genus.id_genus')
         ->join('family', 'genus.family_id', '=', 'family.id_family')
         ->join('collector', 'speciment_herbarium.collector_id', '=', 'collector.id_collector')
         ->join('author_identification', 'speciment_herbarium.authorIdentification_id', '=', 'author_identification.id_author')
         ->select(
                'speciment_herbarium.*', 
                'species.name_species', 
                'genus.name_genus', 
                'family.name_family', 
                'collector.name_collector', 
                'author_identification.name_author');
         
      /*   $speciment = $speciment_herba->species->id_species;
         dd($speciment);
         if($speciment_herbarium->type_herbarium == 1){
                $family = $speciment_herbarium->name_species->count();
                dd($family);
         }*/
        $data['tasks'] = [
                [
                        'name' => 'Family',
                        'progress' => '30',
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
                ],
                [
                        'name' => 'Collector',
                        'progress' => '56',
                        'color' => 'info'
                ],
                [
                        'name' => 'Determine',
                        'progress' => '10',
                        'color' => 'warning'
                ]
        ];
        return view('dashboard_view/weed/weedView')->with($data);
    }
}
