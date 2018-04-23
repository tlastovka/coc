<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;


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
    public function index()
    {
        $events = Event::orderBy('created_at', 'asc') ->get();                 //I have ordered all Events in asscending order

        return view('home', compact('events'));
    }
}
