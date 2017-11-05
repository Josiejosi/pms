<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Charts;

use App\Models\User ;
use App\Models\Task ;
use App\Models\Reward ;

class ReportsController extends Controller
{
    public function index() {

    	$user_chart = Charts::database(User::all(), 'bar', 'highcharts')
    						->title('User Performance')
						    ->elementLabel("Score Rank")
						    ->dimensions(1000, 500)
						    ->responsive(true)
						    ->groupBy('name') ;

    	$score_chart = Charts::database(Reward::all(), 'bar', 'highcharts')
    						->title('Current Month Measuring Score(s)')
						    ->elementLabel("Monthly Score")
						    ->dimensions(1000, 500)
						    ->responsive(true)
						    ->groupBy('score') ;

        return view('reports.index', ['user_chart' => $user_chart, 'score_chart' => $score_chart]);
    }
}

/*
  Charts::create('percentage', 'justgage')
    ->title('My nice chart')
    ->elementLabel('My nice label')
    ->values([65,0,100])
    ->responsive(false)
    ->height(300)
    ->width(0);


    [actualValue, minValue, maxValue]
*/
