<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        return view('home');
    }
    
    public function someAdminStuff(Request $request)
    {
        $auth = $request->user()->authorizeRoles('admin');

        if($auth){
        	return 'solo administradores';
        }
        else{
        	return redirect('home');
        }
        //return $request->user()->roles()->where('name', 'user')->first();
        
        //return view(‘some.view’);
    }
    
}
