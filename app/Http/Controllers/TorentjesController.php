<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TorentjesController extends Controller
{
    public function index(){
        return view("torentjes.index");
    }

    public function kamers(){
        return view("torentjes.kamers");
    }

    public function voorzieningen(){
        return view("torentjes.voorzieningen");
    }

    public function contact(){
        return view("torentjes.contact");
    }
}
