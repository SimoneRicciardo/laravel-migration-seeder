<?php

namespace App\Http\Controllers;

use App\train;
use Illuminate\Http\Request;

class trainController extends Controller
{
    public function index(){
        $trains = train::all();
        return view('homepages', compact('trains'));
    }
}
