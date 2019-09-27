<?php

namespace BeltranC\MyPackage\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class MainController extends Controller{
	
	public function index(Request $request)
	{
		// return 'Hola, Mundo!';
		return view('mypackage::index');
	}
}