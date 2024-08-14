<?php

namespace App\Http\Controllers;

use App\Models\PendingForm;
use Illuminate\Http\Request;

class EmployerSiteController extends Controller
{
    public function index(){
        return view('employerhome');
    }


    public function create($form){
        return view($form);
    }

    public function store(Request $request){
          $validatedData = $request -> validate([
            'jobtitle' => 'required',
            'companyname' => 'required',
            'jobaddress' => 'required',
            'jobtype' => 'required',
            'niche' => 'required',
        ]);

            PendingForm::create($validatedData);
   
    }

    
}
