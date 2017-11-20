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
                                <h3 class="panel-title">Create New Task</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form action="{{ url( 'task/store' ) }}" method="POST" class="form-horizontal" role="form">

                                    {!! csrf_field() !!}

                                    <div class="form-group">
                                        <div class="col-sm-4">Name:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="text" 
                                                name="name" 
                                                class="form-control" 
                                                value="" 
                                                required="required"
                                                title="Reward Name">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <div class="col-sm-4">Due Date:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="date" 
                                                name="due_at" 
                                                class="form-control" 
                                                value="" 
                                                required="required"
                                                title="Task Due Date">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">Assign Task To:</div>
                                        <div class="col-sm-8">
                                            <select  
                                                name="user_id" 
                                                class="form-control"  
                                                required="required">

                                                @foreach( $users as $user )

                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>

                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                               
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary">Add Task</button>
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
