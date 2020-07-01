<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;
use Auth;

class EventController extends Controller
{
    public function loadEvents(){
    	$events = Event::all();
    	
    	return response()->json($events);
    }

    public function store(EventRequest $request){
		// dd($request->all());
		// dd($request->all());
		$data = $request->all();
		$data['color'] = '#3788d8';
        // dd($data);
        $data['user_id'] = Auth::id();
        // dd($data);
        // dd(($data['user_id']));
        // Event::create($data['user_id'],$request->id);
    	Event::create($data);
    	return response()->json(true);

    }

    public function update(EventRequest $request){
        // dd($request->all());
        $data = $request->all();
        $data['user_id'] = Auth()->id();
    	$event = Event::where('id',$request->id)->first();
    	error_log($request->id);
    	// $event->fill($request->all);

    	// $event->save();
    	$event->update($data);

    	return response()->json(true);
    }

    public function destroy(Request $request){
        // dd($request->all());
        // dd($request->id);
        Event::where('id', $request->id)->delete();

        return response()->json(true);
    }

    // public function master(){
    //     return view('fullcalendar.master');
    // } 
    public function notify(){

        $events = Event::all();
        // foreach ($events as $event) 
        //     {
        //          //$product->skus is a collection of Sku models
        //          dd( $event->user);
        //     }
        //     dd($events);
        return view('fullcalendar.notification', compact('events'));
    }  

    public function profile(){
        $user = Auth::user();
        return view('fullcalendar.profile', compact("user"));
    }

    public function contactus(){
        return view('fullcalendar.contactus');
    }
}
