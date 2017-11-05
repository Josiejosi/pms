@extends('layouts.backend')

@section('css')


@endsection

@section('content')

        <div class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-sm-8 col-sm-offset-2">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Create New Users</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form action="{{ url( 'user/store' ) }}" method="POST" class="form-horizontal" role="form">

                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <div class="col-sm-4">Email Address:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="email" 
                                                name="email" 
                                                class="form-control" 
                                                value="" 
                                                required="required"
                                                title="Email Address">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="col-sm-4">User Name:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="text" 
                                                name="name" 
                                                class="form-control" 
                                                value="" 
                                                required="required"
                                                title="Urer Name">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="col-sm-4">Password:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="text" 
                                                name="password" 
                                                class="form-control" 
                                                value="" 
                                                required="required"
                                                title="Password">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="col-sm-4">Confirm Password:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="text" 
                                                name="password_confirmation" 
                                                class="form-control" 
                                                value="" 
                                                required="required"
                                                title="Confirm Password">
                                        </div>
                                    </div>                               
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary">Add User</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection

@section('js')



@endsection
