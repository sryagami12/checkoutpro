<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\PixelModel;

class PixelController extends Controller
{

    public function updatepixel(Request $request){

        $newpixel = $request->input('fbpixel');
        $actualPixel = PixelModel::first();

        if(!$actualPixel){
            DB::table('pixel_code')->insert(array(
                'pixeel' => $newpixel,
            ));
        }
        else{
            $actualPixel->pixeel = $newpixel;
            $actualPixel->save();
        }
        
        return redirect()->route('home') ;
    }
}
