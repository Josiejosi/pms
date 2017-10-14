<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
    	$events = [];

		$events[] = \Calendar::event(
		    'Over due', //event title
		    false, //full day event?
		    '2017-08-01T0800', //start time (you can also use Carbon instead of DateTime)
		    '2017-08-01T0830', //end time (you can also use Carbon instead of DateTime)
			3 //optionally, you can specify an event ID
			,[
        		'color' => '#b10',
    		]
		);	

		$events[] = \Calendar::event(
		    'Event One', //event title
		    false, //full day event?
		    '2017-08-01T0800', //start time (you can also use Carbon instead of DateTime)
		    '2017-08-01T0830', //end time (you can also use Carbon instead of DateTime)
			1 //optionally, you can specify an event ID
			,[
        		'color' => '#b10',
    		]
		);

		$events[] = \Calendar::event(
		    'Event Two', //event title
		    false, //full day event?
		    '2017-08-01T0900', //start time (you can also use Carbon instead of DateTime)
		    '2017-08-01T0930', //end time (you can also use Carbon instead of DateTime)
			2 //optionally, you can specify an event ID
		);

		$events[] = \Calendar::event(
		    "Valentine's Day", //event title
		    true, //full day event?
		    new \DateTime('2017-08-24'), //start time (you can also use Carbon instead of DateTime)
		    new \DateTime('2017-08-24'), //end time (you can also use Carbon instead of DateTime)
			3 //optionally, you can specify an event ID
		);


		$calendar = \Calendar::addEvents($events) ;

		return view('admin', compact('calendar'));
    }
}
