<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task ;
use App\Models\User ;
use App\Models\TaskNote ;
use App\Models\ScoreUser ;

use PDF;

use Carbon\Carbon ;

class TaskController extends Controller
{
    public function index() {
    	return view( "tasks.index", [ "tasks" => Task::orderByDesc("id")->get() ] ) ;
    }

    public function create() {
    	return view( "tasks.create", [ "users" => User::orderByDesc("id")->get() ] ) ;
    }

    public function store( Request $request ) {

    	$user_id 			= $request->user_id ;

    	$tasks 				= Task::create([
    		"name" 			=> $request->name,
    		"due_at"		=> $request->due_at, 
    		"completed_at"	=> Carbon::createFromFormat('Y-m-d H:i:s', '0000-01-01 00:00:00', 'UTC'), 
    		"assigned_to"	=> $user_id, 
    		"assigned_by"	=> auth()->user()->id, 
    		"tagged"		=> 0,
    		"completed"		=> 0,
    		"is_completed"	=> 0,
    	]) ;
    	
    	return redirect( "tasks" ) ;
    }

    public function destroy( $id ) {

    	( Task::find($id) )->delete() ;

        flash('Successfully deleted a task')->success() ;

    	return redirect( "tasks" ) ;
    }

    public function review( $id ) {

    	$task = Task::find( $id ) ;

    	return view( "tasks.review", [ "task" => $task ] ) ;
    }

    public function complete( $id ) {

    	( Task::find( $id ) )->update( [ 'is_completed'=>true, 'completed_at'=>Carbon::now() ] ) ;

    	$month = date("m") ;

    	$incremental_score = 10 ;

    	if ( ScoreUser::where( "month", $month )->where( "user_id", auth()->user()->id )->count() == 1 ) {
    		$score = ScoreUser::where( "month", $month )->where( "user_id", auth()->user()->id )->first() ;

    		$current_score = $score->score ;

    		ScoreUser::where( "month", $month )->where( "user_id", auth()->user()->id )->update([
    			"score"		=> $current_score + $incremental_score + 1.7,
    		]) ;
    	} else {
    		ScoreUser::create([
    			"user_id"=>auth()->user()->id,
    			"month"=>$month,
    			"score"=>$incremental_score + 1.7,
    		]) ;
    	}

        flash('Successfully completed a task')->success() ;

    	return redirect()->back() ;

    }

    public function note( $id ) {
        $task = Task::find( $id ) ;
        $notes = TaskNote::where("task_id", $id)->orderByDesc("id")->get() ;
        return view( "tasks.notes", [ "task" => $task, "notes" => $notes ] ) ;
    }

    public function notes_store( Request $request ) {

        TaskNote::create([
            "name"                  => $request->name, 
            "description"           => $request->description, 
            "task_id"               => $request->task_id,
        ]) ;
        flash('Note successfully created')->success() ;
        return redirect()->back() ;
    }

    public function pdf() {

        $pdf = PDF::loadView( 'pdf.tasks.index', [ "tasks" => Task::orderByDesc("id")->get() ] ) ;
        $pdf->SetProtection (['copy', 'print'], '', 'pass' ) ;
        return $pdf->stream('tasks.pdf') ;

    }
}
