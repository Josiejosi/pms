<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User ;

use Spatie\Permission\Models\Role;

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

        flash('New user successfully added.')->important() ;

    	return redirect( "users" ) ;
    }

    public function destroy( $id ) {

    	( User::find($id) )->delete() ;

        flash('User successfully removed from the system.')->important() ;

    	return redirect( "users" ) ;
    }

    public function role($id) {
        return view( "users.role", [ "user" => User::find( $id ), "roles" => Role::all() ] ) ;
    }

    public function store_role( Request $request ) {
        //$user->assignRole('writer');

        $user = User::find($request->user_id) ;
        $role = Role::find($request->role) ;

        $user->assignRole( $role->name ) ;

        flash( $user->name . " was assigned a role of " . $role->name )->important() ;

        return redirect()->back() ;
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
