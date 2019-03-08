<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $role = Auth::user()->role; 
        
        // Check user role
        switch ($role) {
            case 'admin':
                    return view('admin/index');
                break;
            case 'guide':
                    return view('guide/index');
                break; 
            default:
                    return view('user/index'); 
                break;
        }

    }
}
