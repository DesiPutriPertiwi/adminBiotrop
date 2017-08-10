<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvasiveViewController extends Controller
{
    public function index() {
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
