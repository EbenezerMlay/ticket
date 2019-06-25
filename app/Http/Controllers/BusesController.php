<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Buses;
use Auth;

class BusesController extends Controller
{
   

    
    public function search(){
    	$buses = Bus::where('source', 'like', '%'.request('search').'%')->where('destination', 'like', '%'.request('destination').'%')->get();
    	
    	return view('display.search')->with(compact('buses'));
    }

    public function view($id){
        $bus = Buses::where('id', $id)->get();
        $user = Auth::user();
        return view('display.view')->with(compact('bus', 'user'));
    }
    
    //
}
