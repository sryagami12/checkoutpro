<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\PixelModel;

class PixelController extends Controller
{

    public function updatepixel(Request $request){

        //$newpixel = $request->get('fbpixel');
        $actualPixel = PixelModel::all();
        
        return $actualPixel;

    }
}
