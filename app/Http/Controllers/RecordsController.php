<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Record;

class RecordsController extends Controller
{
    //
    public function showdb()
    {
       $records=Record::all();
       return view('view')->with('record',$records);
    }
    public function showAbout()
    {
       return view('about');
    }
    public function showContact()
    {
        return view('contact');
    }
    public function contact()
    {
       return view('contact');
    }
    public function about()
    {
      return view('about');
    }
    public function redirect($link){

        return "The link is:{$link}";
    }
}
