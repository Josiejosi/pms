@extends('layouts.backend')

@section('css')


@endsection

@section('content')

        <div class="content">
            <div class="container-fluid">

                @include('flash::message')

                <div class="row">

                    <div class="col-sm-8 col-sm-offset-2">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Update Profile</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form action="{{ url( 'user/profile/store' ) }}" method="POST" class="form-horizontal" role="form">

                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <div class="col-sm-4">Email Address:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="email" 
                                                name="email" 
                                                readonly="true" 
                                                value="{{ auth()->user()->email }}" 
                                                class="form-control" 
                                                value="" 
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
                                                value="{{ auth()->user()->name }}" 
                                                required="required"
                                                title="Urer Name">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="col-sm-4">Password:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="password" 
                                                name="password" 
                                                class="form-control" 
                                                autocomplete="false" 
                                                value="" 
                                                title="Password">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="col-sm-4">Confirm Password:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="password" 
                                                name="password_confirmation" 
                                                class="form-control" 
                                                value="" 
                                                autocomplete="false" 
                                                title="Confirm Password">
                                        </div>
                                    </div>                               
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-success">Update Profile</button>
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
