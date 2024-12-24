<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemDetailController extends Controller
{
    public function index() 
    {
        return view('item-detail');
    }
}
