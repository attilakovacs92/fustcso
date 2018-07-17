<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $items = Product::all();

        return view('welcome', compact('items'));
    }
}
