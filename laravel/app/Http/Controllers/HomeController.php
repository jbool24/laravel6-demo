<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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
    public function index(Request $request)
    {
        $data = [
            'joke' => "What's the definition of beautiful? Whatever Chuck Norris says it is.",
            'jokes' => [
                // "What's the definition of beautiful? Whatever Chuck Norris says it is.",
                // "What's the definition of beautiful? Whatever Chuck Norris says it is.",
                // "What's the definition of beautiful? Whatever Chuck Norris says it is."
            ],
            'name' => $request->user()->name
        ];

        return view('jokes', $data);
        // return view('home');
    }

    public function home()
    {
        return view('home');
    }
}
