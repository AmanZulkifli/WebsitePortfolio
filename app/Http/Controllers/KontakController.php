<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class KontakController extends Controller {
    public function contact(){
		return view('contact');
	}
}
?>