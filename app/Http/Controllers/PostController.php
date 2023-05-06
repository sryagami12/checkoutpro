<?php

namespace App\Http\Controllers;

use Sheets;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function store(Request $request)
    {
        $values = Sheets::spreadsheet('1mqsbIrMoEH6SQ0V5PaQaQxLhpRkSrAJt_2VNRVkltiw')->sheet('sales')->all();
        return $values;
    }
}
