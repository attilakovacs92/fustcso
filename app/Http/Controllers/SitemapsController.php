<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class SitemapsController extends Controller
{
    public function index()
    {
        $now = Carbon::now()->toW3cString();

        return response(view('sitemaps.index', compact('now')))->header('Content-Type', 'application/xml');
    }
}
