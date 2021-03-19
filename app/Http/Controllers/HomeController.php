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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $test = \DB::table('transactions')
        // ->select(\DB::raw('count(*) as user_count, transaction_status,sum(amount)'))
        // ->groupBy('transaction_status') 
        // ->get();

        // $test = \DB::table('transactions')
        // ->select(\DB::raw('count(*) as user_count, created_at ,sum(amount)'))
        // ->groupBy(\DB::raw('MONTH(created_at)'))
        // ->get();

        // dd($test);
        return view('home');
    }
}
