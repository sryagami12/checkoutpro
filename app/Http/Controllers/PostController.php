<?php

namespace App\Http\Controllers;

use SheetDB\SheetDB;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function store(Request $request)
    {
        $sheetdb = new SheetDB('i77oen0q9b6ry');
        return $sheetdb->name();
    }
}
