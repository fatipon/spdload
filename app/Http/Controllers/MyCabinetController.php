<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCabinetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function MyCabinet()
    {
        return view('MyCabinet');
    }
}
