<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class TentangController extends Controller {
	public function about(){
		return view('about');
	}
}
?>