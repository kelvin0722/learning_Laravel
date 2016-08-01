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

    public function showNew()
    {
       return view('new');
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

    public function store(Request $request)
    {
       $Record= new Record;

       $Record->country=$request->get('country');
       $Record->city=$request->get('city');
       $Record->date=$request->get('date');
       $Record->no_of_aliens=$request->get('no_of_aliens');
       $Record->color_of_aliens=$request->get('color_of_aliens');

       $Record->save();

       // if records successfully added display the message
       $request->session()->flash('flash_message','new record added successfully!!');
       return redirect()->back();
    }

}
