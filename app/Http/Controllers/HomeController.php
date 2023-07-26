<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductLinkModel;
use App\Models\PixelModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productlinks = ProductLinkModel::all();
        $actualpixel = PixelModel::first();
        return view("home", [   "productlinks"=> $productlinks,
                                "actualpixel" => $actualpixel]);
    }
}
