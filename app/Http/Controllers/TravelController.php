<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\Transport;

class TravelController extends Controller
{
    public function index(){
        $travels= Travel::all();
        $transports= Transport::all();
        
        return view('travels.index',compact('travels','transports'));
    }
}
