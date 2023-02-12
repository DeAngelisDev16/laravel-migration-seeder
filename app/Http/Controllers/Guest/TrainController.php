<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;


class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_hour', 'LIKE', '2023-02-10%')->get();
        //dump($trains);
        return view('home', compact('trains'));
    }
}
