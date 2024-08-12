<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerSiteController extends Controller
{
    public function index(){
        return view('employerhome');
    }


    public function create(){
        return view('form');
    }
}
