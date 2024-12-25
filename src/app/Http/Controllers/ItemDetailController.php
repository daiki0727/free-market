<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemDetailController extends Controller
{
    public function index($id) 
    {
        $item = Item::with(['brand', 'category', 'condition', 'user'])->findOrFail($id);
        
        return view('item-detail', compact('item'));
    }
}
