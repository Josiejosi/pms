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
                                <h3 class="panel-title">Review Task</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form action="#" method="POST" class="form-horizontal" role="form">

                                    {!! csrf_field() !!}

                                    <div class="form-group">

                                        <div class="col-sm-4">Name:</div>

                                        <div class="col-sm-8">

                                            <input type="text" class="form-control" value="{{ $task->name }}">

                                        </div>

                                    </div>

                                     <div class="form-group">

                                        <div class="col-sm-4">Due Date:</div>

                                        <div class="col-sm-8">

                                            <input type="text"  class="form-control"  value="{{ $task->due_at }}" >

                                        </div>

                                    </div>

                                     <div class="form-group">

                                        <div class="col-sm-4">Created Date:</div>

                                        <div class="col-sm-8">

                                            <input type="text"  class="form-control"  value="{{ $task->created_at }}" >

                                        </div>

                                    </div>

                                     <div class="form-group">

                                        <div class="col-sm-4">Updated Date:</div>

                                        <div class="col-sm-8">

                                            <input type="text"  class="form-control"  value="{{ $task->updated_at }}" >

                                        </div>

                                    </div>

                                     <div class="form-group">

                                        <div class="col-sm-4">Completed Date:</div>

                                        <div class="col-sm-8">

                                            <input type="text"  class="form-control"  value="{{ $task->completed_at }}" >

                                        </div>

                                    </div>

                                    <?php 

                                        $assigner = ( \App\Models\User::find( $task->assigned_by ) )->name ;
                                        $assignee = ( \App\Models\User::find( $task->assigned_to ) )->name ;

                                    ?>

                                     <div class="form-group">

                                        <div class="col-sm-4">Assigned To:</div>

                                        <div class="col-sm-8">

                                            <input type="text"  class="form-control"  value="{{ $assignee }}" >

                                        </div>

                                    </div>

                                     <div class="form-group">

                                        <div class="col-sm-4">Assigned By:</div>

                                        <div class="col-sm-8">

                                            <input type="text"  class="form-control"  value="{{ $assigner }}" >

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
