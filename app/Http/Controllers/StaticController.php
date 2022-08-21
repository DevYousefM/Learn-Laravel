<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
  public function index() {
    return view('welcome',[
      "page_name"=>"Welcome Page",
      "page_description" => "This Is Description"
    
    ]);
  }
  public function about() {
    return view('about-me',[
      "page_name" => "About Me Page",
      "page_description" => "This Is Description"
    ]);
  }
  public function contact() {
    return view("contact", [
      "page_name" => "Contact Me Page",
      "page_description" => "This Is Description"
    ]);
  }
}
