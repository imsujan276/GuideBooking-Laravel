<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\TouristArea;
use App\User;
use App\GuideBooking;

class PublicController extends Controller
{
    public function index(){
        $touristAreas = TouristArea::skip(0)->take(6)->inRandomOrder()->get();
        $guides = User::where('role', 'guide')->skip(0)->take(6)->inRandomOrder()->get();
        // return $touristAreas;
        return view('welcome', compact('touristAreas', 'guides'));
    }

    public function userdetails($username){

        $guide = User::where('username', $username)
                        ->with('guideProfile')
                        ->with('guideFeedback')
                        ->with('touristArea')
                        ->first();
        $avgRate =  round($guide->guideFeedback->avg('rate'), 0);
        return view('userdetails', compact('guide', 'avgRate'));
    }

    public function tourdetails($user_id, $slug){
        $tour = TouristArea::where('user_id', $user_id)
                                ->where('slug', $slug)
                                ->first();
        $guide = User::where('id', $user_id)
                        ->with('guideFeedback')
                        ->with('guideProfile')
                        ->first();
        $avgRate =  round($guide->guideFeedback->avg('rate'), 0);
        return view('tourdetails', compact('guide', 'avgRate', 'tour'));
    }

    public function tours(){
        $tours = TouristArea::
            paginate(15);
        return $tours;
    }

    public function guides(){
        $users = User::with('guideFeedback')
            ->where('role', 'guide')
            ->with('guideProfile')
            ->paginate(15);
        return $users;
    }


    public function search(Request $request){
        if(isset($request->type)){
            $type = $request->type;
            $arg = $request->s;

            if($type== 'guide'){
                return User::where('role', 'guide') 
                            -> where('name', 'like', '%' . $arg. '%')
                            ->orWhere('username', 'like', '%' . $arg. '%')
                            ->with('guideProfile')
                            ->paginate(15);
            }
            else if($type== 'tour'){
                return TouristArea::where('title', 'like', '%' . $arg. '%')
                            ->orWhere('city', 'like', '%' . $arg. '%')
                            ->orWhere('country', 'like', '%' . $arg. '%')
                            ->paginate(15);
            }
            else{
                return redirect()->route('tours');
            }
        }else{
            return redirect()->route('tours');
        }
    }



    public function bookingRequest(Request $request){

        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'days' => 'required|integer|min:0',
            'peoples' => 'required|integer|min:0',
            'tourType' => 'required',
            'description' => 'required| min:10 |max: 500',

        ], [
            'date.required' => 'Name is required',
            'days.required' => 'Password is required'

        ]);

        $booking = new GuideBooking();
        $booking->from = Auth::user()->id;
        $booking->to = $request->to;
        $booking->tour_date = $request->date;
        $booking->time = $request->time;
        $booking->days = $request->days;
        $booking->number_of_people = $request->peoples;
        $booking->type_of_tour = $request->tourType;
        $booking->description = $request->description;
        $booking->save();
        return back()->with('success', 'Booking request has been sent successfully.');
    }
}
