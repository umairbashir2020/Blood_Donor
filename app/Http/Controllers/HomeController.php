<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\Blood;
use App\Models\City;
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
        // return view('admin.dashboard.index');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // public function adminHome()
    // {
    //     return view('adminHome');
    // }

    public function dashboard_index(Request $request){
        $all_donors= Donor::get();
        $all_bloods= Blood::get();
        return view('admin.dashboard.index',compact('all_donors','all_bloods'));

    }

}
