<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Herbarium;

class HerbariumController extends Controller
{
     protected function index()
     {
         return view(herbarium/weedherba/index);
     }
}
