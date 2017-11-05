<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User ;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public function index() {
    	return view( "roles.index", [ "users" => User::orderByDesc("id")->get() ]  ) ;
    }

    public function role( Request $request ) {
    	
    	$role = Role::create([ 'name' => $request->role ]);
    	flash('New role successfully added.')->important() ;
    	return redirect()->back() ;

    }

    public function permision(  Request $request  ) {
    	
    	$permission = Permission::create([ 'name' => $request->permission ]);
    	flash('New permission successfully added.')->important() ;
    	return redirect()->back() ;

    }

    public function assign_role($user_id) {
    	
    }

    public function assign_permission($role_id) {
    	
    }
}
