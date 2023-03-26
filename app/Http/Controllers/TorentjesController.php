<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TorentjesController extends Controller
{
    public function index(){
        return view("Torentjes.index");
    }
}
