<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Condition;
use App\Models\Brand;

class ListingController extends Controller
{
    public function show()
    {

        $categories = Category::all();
        $conditions = Condition::all();
        $brands = Brand::all();

        return view('listing', compact('categories', 'conditions', 'brands'));
    }
}
