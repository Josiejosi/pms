@extends('layouts.backend')

@section('css')


@endsection

@section('content')

        <div class="content">
            <div class="container-fluid">

                @include('flash::message')

                <div class="row">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tasks</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                <a href="{{ url( 'task/create' ) }}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-plus-square-o"></i> New Task
                                </a>
                                <a href="{{ url( 'tasks/pdf' ) }}" target="_blank" class="btn  btn-xs btn-danger">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                </a>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Due Date</th>
                                            <th>Assigned To</th>
                                            <th>Assigned By</th>
                                            <th>Completed At</th>
                                            <th>Created At</th>
                                            <th><i class="fa fa-gear"></i> Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ( ! empty( $tasks ) )
                                        @foreach( $tasks as $task )
                                        <tr>

                                            <?php 

                                                $assigner = ( \App\Models\User::find( $task->assigned_by ) )->name ;
                                                $assignee = ( \App\Models\User::find( $task->assigned_to ) )->name ;

                                            ?>
                                            
                                            <td>{{ $task->name }}</td>
                                            <td>{{ $task->due_at }}</td>
                                            <td>{{ $assignee }}</td>
                                            <td>{{ $assigner }}</td>
                                            <td>{{ $task->completed_at }}</td>
                                            <td>{{ $task->created_at }}</td>

                                            <td>
                                                <a 
                                                    href="{{ url( 'task/destroy' ) }}/{{ $task->id }}" 
                                                    class="btn btn-xs btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                                <a 
                                                    href="{{ url( 'task/review' ) }}/{{ $task->id }}" 
                                                    class="btn btn-xs btn-info">
                                                    <i class="fa fa-list-ol"></i>
                                                </a>
                                            </td>
                                            
                                        </tr>
                                        @endforeach

                                        @else
                                        <tr>
                                            <td>No tasks found.</td>
                                            <td></td>
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
