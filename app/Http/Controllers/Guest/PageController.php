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
        $trains = Train::where('orario_partenza', '>=', '2023-05-12')
            // ->orWhere('orario_partenza', '>', '2023-05-11')
            // ->toSql();
            ->get();
        // dd($trains);

        return view('home', compact('trains'));
    }
}
