<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\ChuckNorisAPI;

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
     * Show the joke board.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, ChuckNorisAPI $chuck)
    {
        $joke = $chuck->getRandom();

        $data = [
            'joke' => isset($joke) ? $joke['value'] : "What's the definition of beautiful? Whatever Chuck Norris says it is.",
            'user' => [
                'name' => $request->user()->name,
                'id' => $request->user()->id
            ]
        ];

        return view('jokes', $data);
    }

}
