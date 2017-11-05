<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User ;

use PDF;

class UserController extends Controller
{
    public function index() {
    	return view( "users.index", [ "users" => User::orderByDesc("id")->get() ] ) ;
    }

    public function create() {
    	return view( "users.create" ) ;
    }

    public function store( Request $request ) {

    	User::create([
    		"name" => $request->name,
    		"email" => $request->email,
    		"password" => bcrypt( $request->password ) ,
    	]) ;
    	return redirect( "users" ) ;
    }

    public function destroy( $id ) {

    	( User::find($id) )->delete() ;

    	return redirect( "users" ) ;
    }

    public function role($id) {
        return view( "users.role", [ "user" => User::find( $id ) ] ) ;
    }

    /**
     * Profile update
    */
    public function profile() {
        return view( "users.profile" ) ;
    } 

    public function pdf() {
        
        $pdf = PDF::loadView( 'pdf.users.index', [ "users" => User::orderByDesc("id")->get() ] ) ;
        $pdf->SetProtection (['copy', 'print'], '', 'pass' ) ;
        return $pdf->stream('users.pdf') ;
        
    }  
}
