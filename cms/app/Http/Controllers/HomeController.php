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
    public function index(Request $request)
    {
        // $request->user()->checkRoles('admin');
        // return view('home');

        if ($request->user()->checkRoles('user'))
        {
            return redirect('/');
        }

        if ($request->user()->checkRoles('admin'))
        {
            return redirect('/admin/dashboard');
        }
    }
}
