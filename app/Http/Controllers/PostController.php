<?php

namespace App\Http\Controllers;

use SheetDB\SheetDB;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function store(Request $request)
    {
        $sheetdb = new SheetDB('i77oen0q9b6ry');
        $sheetdb->create([
            'email'=>'Mark',
            'shipping_first_name'=>'35',
            'shipping_last_name'=>'35',
            'shipping_phone'=>'35',
            'shipping_address1'=>'35',
            'shipping_zip'=>'35',
            'shipping_city'=>'35',
            'shipping_province'=>'35',
            'shipping_country_code'=>'35',
            'accepts_marketing'=>'35',
            'shipping_rate_id'=>'35',
            'billing_address_same'=>'35',
            'billing_first_name'=>'35',
            'billing_last_name'=>'35',
            'billing_address1'=>'35',
            'billing_zip'=>'35',
            'billing_city'=>'35',
            'billing_province'=>'35',
            'billing_company'=>'35',
            'credit_card_number'=>'35',
            'cc-exp-month'=>'35',
            'cc-exp-year'=>'35',
            'credit_card_cvv'=>'35',
        ]);
        return $sheetdb->name();
    }
}