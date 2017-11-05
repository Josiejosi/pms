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
                                <h3 class="panel-title">Create New Reward</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form action="{{ url( 'reward/store' ) }}" method="POST" class="form-horizontal" role="form">

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
                                        <div class="col-sm-4">Description:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="text" 
                                                name="description" 
                                                class="form-control" 
                                                value="" 
                                                required="required"
                                                title="Reward Description">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div class="col-sm-4">Score:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="text" 
                                                name="score" 
                                                class="form-control" 
                                                value="" 
                                                required="required"
                                                title="Score">
                                        </div>
                                    </div>
                               
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary">Add Reward</button>
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
