<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
	public function __construct()
    {
     //   $this->middleware('auth');
    }

    public function index()
    {

    	$events = Event::get();
    	
        return view('eventList', ['events'=>$events]);
    }

    public function getEvent(Request $request){
    	$event_id = $request->id;
    	$eventData = Event::where('id',$event_id)->first();
    	return view('eventDetail', ['eventData'=>$eventData]);
    }

    public function delete_event(Request $request){
 		$event_id = $request->id;
   	
    }
}
