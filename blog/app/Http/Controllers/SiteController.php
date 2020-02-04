<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getHome(){
    	return view ('site.home');
    }
    public function getHomePage(){
    return view ('site.house');
}
public function getaboutus(){
	return view('site.aboutus');
}
public function getaccomodation(){
	return view('site.accomodation');
}
public function getview(){
	return view('site.view');
}
public function getview1(){
	return view('site.view1');
}
public function getview2(){
	return view('site.view2');
}
public function getcontactus(){
	return view('site.contactus');
}
}
