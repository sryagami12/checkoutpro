<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\ProductLinkModel;
use App\Models\PixelModel;

class ProductLinkController extends Controller
{

    public function showproductlinkbyid(Request $request){

        $productlink_id = $request->get('id');
        $productlink = ProductLinkModel::find($productlink_id);
        $actualPixel = PixelModel::first();

        if($productlink->checkout_language=="Spanish"){
            return view('productlink.spanish',['productlink'=>$productlink, 'actualPixel' => $actualPixel]);
        }else{
            return view('productlink.english',['productlink'=>$productlink, 'actualPixel' => $actualPixel]);
        }

    }

    public function deleteproductlinkbyid(Request $request){

        $productlink_id = $request->get('id');
        $productlink = ProductLinkModel::find($productlink_id);
        $productlink->delete();
        return redirect()->route('home') ;

    }

    public function storeproductlink(Request $request){


        if($request->hasFile('product_image_path')){

            $path = Storage::disk('dropbox')->put(
                'images', $request->file('product_image_path'), $request->file('product_image_path')->getClientOriginalName()
            );

            $adapter = \Storage::disk('dropbox')->getAdapter();
            $client = $adapter->getClient();

            $link = $client->createSharedLinkWithSettings(
                $path, 
                ["requested_visibility" => "public"]
            );

        
            $url = str_replace ( "?dl=0" , "?dl=1", $link['url'] );
            $url = str_replace ( "dl=0" , "dl=1", $link['url'] );

            //$image = $request->file('product_image_path');
            //$filename = time() . '.' . $image->getClientOriginalExtension();

            //$path = Storage::disk('public')->put('images/', $request->file('product_image_path'));
            //$path = $request->file('product_image_path')->store('images', 'public');;

            $check = DB::table('product_checkout')->insert(array(
                'product_name'                  => $request->input('product_name'),
                'product_price'                 => $request->input('product_price'),
                'product_quantity'              => $request->input('product_quantity'),
                'product_image_path'            => $url,
                'checkout_free_option_label'    => $request->input('checkout_free_option_label'),
                'checkout_free_option_Value'    => $request->input('checkout_free_option_Value'),
                'checkout_express_option_label' => $request->input('checkout_express_option_label'),
                'checkout_express_option_value' => $request->input('checkout_express_option_value'),
                'checkout_taxes_value'          => $request->input('checkout_taxes_value'),
                'checkout_language'             => $request->input('checkout_language'),
            ));
        };

        return redirect()->route('home') ;
    }
}
