<?php
namespace App\Http\Controllers;

use illuminate\Http\Request;

Class BlogController extends  Controller{
    public function index(){
		return view('index');
	}


}

?>