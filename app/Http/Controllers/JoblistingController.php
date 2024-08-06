<?php

namespace App\Http\Controllers;

use App\Models\Joblisting;
use Illuminate\Http\Request;

class JoblistingController extends Controller
{
  
    public function index(){
        return view('homepage',[
            'joblistings'=> self::getSearchJobs(),
            'joblistingFullDesc' => self::getfullJobDesc(),
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
        if(!empty(request('search'))){
        return Joblisting::select('hashId','jobtitle','companyname','jobaddress','role')->filter(request(['search']))->paginate(3);
        }
        else if(!empty(request('page'))){
          return Joblisting::select('hashId','jobtitle','companyname','jobaddress','role')->filter(request(['page']))->paginate(3);
        }
        else{
         return [];
        }
    }

}
