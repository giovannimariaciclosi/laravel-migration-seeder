<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // accedo al db
        $trains = Train::all();
        // dd($trains);

        return view('home', compact('trains'));
    }
}
