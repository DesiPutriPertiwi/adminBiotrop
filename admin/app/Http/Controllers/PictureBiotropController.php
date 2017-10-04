<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Model\Picture;

class PictureBiotropController extends Controller
{

    public function createpic()
    {
        return view('picture');
    }

    public function picture(Request $request)
    {
        
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $request->file('image')->move("biotrop/",$fileName);

        $picture   = new Picture;
        $picture   -> pic_biot                               = $fileName;
        $picture   -> save();
         
        return redirect()->intended('/biotrop-management');
    } 
}