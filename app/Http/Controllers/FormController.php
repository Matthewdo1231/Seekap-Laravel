<?php

namespace App\Http\Controllers;

use App\Models\PendingForm;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create($form){
        return view($form,[
            'json' => self::getForm1Info(),
        ]);
    }

    public function getForm1Info(){
      return PendingForm::select('jobtitle','companyname','jobaddress','jobtype','niche')->filter('3547')->get();
    }

    
    public function store(Request $request){
          $validatedData = $request -> validate([
            'jobtitle' => 'required',
            'companyname' => 'required',
            'jobaddress' => 'required',
            'jobtype' => 'required',
            'niche' => 'required',
        ]);
        $validatedData['hashId'] = mt_rand(1,10000); 
        
         PendingForm::create($validatedData);
    }
    

}
