<?php

namespace App\Http\Controllers;

// use App\User;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function getIndex(){
        return view('welcome');
    }
    // public function getCreate(){
    //     return view('create');
    // }
    public function getAbout(){
        $companyname = "Perimeter.co";
        $isuserregistered = False;
        $users = array("anmol","mudit","raghav");

        return view('pages.about')
        ->with("companyname", $companyname)
        ->with("isuserregistered", $isuserregistered)
        ->with("users", $users);
    }
    public function getContact(){
        return view('pages.contact');
    }
   
}