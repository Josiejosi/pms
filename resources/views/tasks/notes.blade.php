@extends('layouts.backend')

@section('css')


@endsection

@section('content')

        <div class="content">
            <div class="container-fluid">

                <div class="row">

                    @include('flash::message')

                    <div class="col-sm-6">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Task Details</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form action="#" method="POST" class="form-horizontal" role="form">

                                    {!! csrf_field() !!}

                                    <div class="form-group">

                                        <div class="col-sm-4">Name</div>

                                        <div class="col-sm-8">: {{ $task->name }}</div>

                                    </div>

                                     <div class="form-group">

                                        <div class="col-sm-4">Due Date</div>

                                        <div class="col-sm-8">: {{ $task->due_at }}</div>

                                    </div>

                                     <div class="form-group">

                                        <div class="col-sm-4">Created Date</div>

                                        <div class="col-sm-8">: {{ $task->created_at }}</div>

                                    </div>

                                     <div class="form-group">

                                        <div class="col-sm-4">Updated Date</div>

                                        <div class="col-sm-8">: {{ $task->updated_at }}</div>

                                    </div>

                                     <div class="form-group">

                                        <div class="col-sm-4">Completed Date</div>

                                        <div class="col-sm-8">: {{ $task->completed_at }}</div>

                                    </div>

                                    <?php 

                                        $assigner = ( \App\Models\User::find( $task->assigned_by ) )->name ;
                                        $assignee = ( \App\Models\User::find( $task->assigned_to ) )->name ;

                                    ?>

                                     <div class="form-group">

                                        <div class="col-sm-4">Assigned To</div>

                                        <div class="col-sm-8">: {{ $assignee }}</div>

                                    </div>

                                     <div class="form-group">

                                        <div class="col-sm-4">Assigned By</div>

                                        <div class="col-sm-8">: {{ $assigner }}</div>

                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">New Note</h3>
                            </div>
                            <div class="panel-body">
                                <form action="{{ url( 'task/note/store' ) }}" method="POST" class="form-horizontal" role="form">

                                    {!! csrf_field() !!}

                                    <input type="hidden" name="task_id" value="{{ $task->id }}">

                                    <div class="form-group">
                                        <div class="col-sm-4">Name:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="text" 
                                                name="name" 
                                                class="form-control" 
                                                value="" 
                                                required="required"
                                                title="Note Name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">Description:</div>
                                        <div class="col-sm-8">
                                            <textarea 
                                                name="description" 
                                                class="form-control"
                                                title="Note Description"></textarea>
                                        </div>
                                    </div>
                               
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-success btn-block btn-sm">Add Note</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                 <div class="row">

                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">All Task Notes</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ( !empty( $notes ) )
                                        @foreach( $notes as $note )
                                        <tr>
                                            <td>{{ $note->name }}</td>
                                            <td>{{ $note->description }}</td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td>No notes found.</td>
                                            <td></td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                 </div>
            </div>
        </div>

@endsection

@section('js')



@endsection
