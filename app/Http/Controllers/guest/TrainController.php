<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index(){
        $trains = Train::all();

        return view('trains.index', compact('trains'));
    }

    public function today(){
        $trains = Train::all()->where('data', '=', '2024-07-19');

        return view('pages.home', compact('trains'));
    }
}
