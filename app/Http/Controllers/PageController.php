<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class PageController extends Controller
{
    public function getpageInf(){
    	return view('inf');	
    }
    public function getpageContact(){
    	return view('contact');	
    }
    public function getpageProfessor(){
    	return view('professor');	
    }
    public function getpageReqRule(){
    	return view('reqrule');	
    }
    public function getpageHome(){
    	return view('home');	
    }
    public function getpageRule(){
    	return view('adminlte.pages.rulesall');	
    }
    //ForAdminControl
    public function getAdminControl(){
    	return view('AdminLTE.HomeAdmin');	
    }

    public function ConMyDB(){
    	
    	$qr = DB::table('education')->get();
  		dd($qr);
    }

    public function showallprofessor(){
        return view('AdminLTE.pages.showprofessor');  
    }
}
