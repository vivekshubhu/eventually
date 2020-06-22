<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\EventRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function loadEvents(){
    	$events = Event::all();
    	
    	return response()->json($events);
    }

    public function store(EventRequest $request){
		// DD($request);
		// dd($request->all());
		$data = $request->all();
		$data['color'] = '#3788d8';
    	Event::create($data);
    	return response()->json(true);

    }

    public function update(EventRequest $request){
    	$event = Event::where('id',$request->id)->first();
    	error_log($request->id);
    	// $event->fill($request->all);

    	// $event->save();
    	$event->update($request->all());

    	return response()->json(true);
    }
}
