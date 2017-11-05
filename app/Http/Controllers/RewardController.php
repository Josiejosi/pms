<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reward ;
use PDF ;

class RewardController extends Controller
{
    public function index() {
    	return view( "rewards.index", [ "rewards" => Reward::orderByDesc("id")->get() ] ) ;
    }

    public function create() {
    	return view( "rewards.create" ) ;
    }

    public function store( Request $request ) {

    	Reward::create([
    		"name" 			=> $request->name,
    		"description" 	=> $request->description,
    		"score" 		=> $request->score ,
    	]) ;
    	
    	return redirect( "rewards" ) ;
    }

    public function destroy( $id ) {

        ( Reward::find($id) )->delete() ;

        return redirect( "rewards" ) ;
    }

    public function pdf() {

        $pdf = PDF::loadView( 'pdf.rewards.index', [ "rewards" => Reward::orderByDesc("id")->get() ] ) ;
        $pdf->SetProtection (['copy', 'print'], '', 'pass' ) ;
        return $pdf->stream('rewards.pdf') ;

    }
}
