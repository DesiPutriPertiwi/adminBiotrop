<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForestViewController extends Controller
{
    protected function index()
    {
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
        return view('dashboard_view/forest/forestView')->with($data);
    }
}
