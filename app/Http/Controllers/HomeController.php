<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company; 
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
	public function index(){
	    $perusahaan = company::all();	    

	    return view('index', ['perusahaan'=>$perusahaan]);	  
	}
}
