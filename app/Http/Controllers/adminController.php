<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\TouristArea;
use App\GuideBooking;

class adminController extends Controller
{
    public function index(){
        return view('admin/index');
    }

    public function profile(){
        $me = Auth::user();
        return view('admin/profile', compact('me'));
    }

    public function tours(){
        $tours = TouristArea::get();
        return view('admin/list', compact('tours'));
    }
    public function deletetours($id){
        TouristArea::find($id)->delete();
        return back()->with('success', 'Tourist Area Deleted.');
    }

    public function users(){
        $users = User::where('role', 'guide')->orWhere('role','user')->with('guideProfile')->get();

        // return $users;
        return view('admin/list', compact('users'));
    }

    public function bookings(){
        $bookings =  GuideBooking::where('status', 1)->get();
        return view('admin/list', compact('bookings'));
    }

    public function updateProfile(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            ]);
        $u = User::find(Auth::id());
        $u->name = $request->name;
        $u->email = $request->email;
        $u->save();
        return back()->with('success', 'Profile Updated');
    }

    public function changePassword(Request $request){
        $request->validate([
            'pass' => 'required|min:8|max:30',
            'c_pass' => 'required'
            ]);
        if($request->pass != $request->c_pass){
            return back()->with('error', 'Passwords do not match.');
        }

        $u = User::find(Auth::id());
        $u->password = bcrypt($request->pass);
        $u->save();
        return back()->with('success', 'You Updated thepassword');
    }
    
}
