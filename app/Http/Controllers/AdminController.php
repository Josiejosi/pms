<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task ;
use App\Models\User ;
use App\Models\TaskNote ;
use App\Models\ScoreUser ;

use Charts;

use Carbon\Carbon ;

class AdminController extends Controller
{
    public function index() {

    	$month = date("m") ;

    	$current_score = 0 ;

    	if ( ScoreUser::where( "month", $month )->where( "user_id", auth()->user()->id )->count() == 1 ) {
    		$score = ScoreUser::where( "month", $month )->where( "user_id", auth()->user()->id )->first() ;

    		$current_score = $score->score ;
    	}


		$tasks = Task::whereAssignedTo( auth()->user()->id )->whereIsCompleted(0)->orderByDesc("id")->get() ;

		$tasks_completed = Task::whereAssignedTo( auth()->user()->id )->whereIsCompleted(1)->count() ;
		$tasks_incompleted = Task::whereAssignedTo( auth()->user()->id )->whereIsCompleted(0)->count() ;

		$tasks_totals = $tasks_completed + $tasks_incompleted ;

		$events = [];

		$i = 1 ;

		foreach ( $tasks as $task ) {
			$events[] = \Calendar::event(
			    $task->name,
			    true,
			    Carbon::now(),
			    Carbon::now(),
				$i
			);

			$i++ ;
		}

		$calendar = \Calendar::addEvents( $events ) ;

		$tasks_chart = Charts::create('percentage', 'justgage')
			    ->title('Tasks Comparison')
			    ->elementLabel('Completed')
			    ->values( [ $tasks_completed, $tasks_incompleted, $tasks_totals ] )
			    ->responsive(false)
			    ->height(300)
			    ->width(0);

		return view('admin', compact( 'calendar', 'tasks', 'current_score', 'tasks_chart' ) );
    }
}
