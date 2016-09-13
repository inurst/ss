<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RuleController extends Controller
{   
	public function newrule(){
		return view('adminlte.pages.newrule');
	}
}
