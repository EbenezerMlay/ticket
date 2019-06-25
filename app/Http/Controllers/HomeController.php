<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function search(Request $request)
    {
        $search=$request->get('q');

        if ($search) {
            $routes=DB::table('buses')->where('Route_from', 'like', '%'.$search.'%')->paginate(5);
       
            $search1=$request->get('d');

            if ($search1) {
                $routes=DB::table('buses')->where('Route_to', 'like', '%'.$search1.'%')->paginate(5);

                return view('search')->with('routes', $routes);
            }
        }
    }

   
}