<?php

namespace App\Http\Controllers;

use App\Models\Joblisting;
use Illuminate\Http\Request;

class JoblistingController extends Controller
{
  
    public function index(){
  
        return view('homepage',[
        'joblistings' =>(self::getSearchJobs()->appends(['search' => request('search')])),
        'joblistingFullDesc' => self::getFullJobDesc(),
        ]);
    }
    
    public static function getFullJobDesc(){
      if(!empty(request('id'))){
        return Joblisting::select('*')->filter(request(['id']))->get();
      }  
      else{
        return [];
      }
    } 

    public static function getSearchJobs(){
        return Joblisting::select('hashId','role','companyname','jobaddress')->filter(request(['search']))->paginate(6);
    }
}