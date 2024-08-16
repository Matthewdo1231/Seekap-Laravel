<?php

namespace App\Http\Controllers;

use App\Models\PendingForm;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create($form){
        if($form == 'form1'){
            return view($form,[
                'jobinfos' => self::getForm1Info(),
            ]);
        }
        if($form == 'form2'){
            return view($form,[
                'jobinfos' => self::getForm2Info(),
            ]);
        }
        
    }

    public function getForm1Info(){
        $Id = '8349';
       return PendingForm::select('hashId','jobtitle','companyname','jobaddress','jobtype','niche')->filter($Id)->get();
    }


    public function getForm2Info(){
        return PendingForm::select('about','aboutRole','requirements','benefits')->filter('8349')->get();
      }

    
    public function store(Request $request){
      //If userId matches matches column in database overwrite info else create new column
        dd(count(self::getForm1Info()) == 0);

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
