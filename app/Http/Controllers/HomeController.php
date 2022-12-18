<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Offer;
use Illuminate\Support\Facades\Auth;

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
        $applications = Application::latest()->where('user_id', Auth::user()->id)->get();
        $offers = Offer::latest()->where('user_id', Auth::user()->id)->get();
        return view('home', ['applications' => $applications, 'offers' => $offers]);
    }
}
