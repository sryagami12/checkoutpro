<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductLinkModel;

class ProductLinkController extends Controller
{
    public function showproductlinkbyid(Request $request){

        $productlink_id = $request->get('id');
        $productlink = ProductLinkModel::find($productlink_id);
        if($productlink->checkout_language=="Spanish"){
            return view('productlink.spanish',['productlink'=>$productlink]);
        }else{
            return view('productlink.english',['productlink'=>$productlink]);
        }

    }
    public function storeproductlink(Request $request){


        if($request->hasFile('product_image_path')){
            $image = $request->file('product_image_path');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            $path = $request->file('product_image_path')->store('images', 'public');;

            $check = DB::table('product_checkout')->insertGetId(array(
                'product_name'                  => $request->input('product_name'),
                'product_price'                 => $request->input('product_price'),
                'product_quantity'              => $request->input('product_quantity'),
                'product_image_path'            => $path,
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