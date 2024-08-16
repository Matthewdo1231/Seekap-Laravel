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
        if(!empty($Id)){
         return PendingForm::select('hashId','jobtitle','companyname','jobaddress','jobtype','niche')->filter($Id)->get();
        }
        else{
            return collect([(object) [
                'hashId' => null,
                'jobtitle' => '',
                'companyname' => '',
                'jobaddress' => '',
                'jobtype' => '',
                'niche' => ''
            ]]);
    
        }
    }


    public function getForm2Info(){
        return PendingForm::select('about','aboutRole','requirements','benefits')->filter('8349')->get();
      }

    
    public function store(Request $request){
        $Id = '8349';
      //If userId not matches in any column in database create new one else overwrite the existing one
        if(count(self::getForm1Info()) == 0){

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

        else{
            PendingForm::where('hashId', $Id)
            ->update([
            'jobtitle' => $request -> jobtitle,
            'companyname' => $request -> companyname,
            'jobaddress' => $request -> jobaddress,
            'jobtype' => $request -> jobtype,
            'niche' => $request -> niche,
            ]);
        }

    }
    

}
