<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>All Tasks - Report</title>
        <link rel="stylesheet" href="{{ asset( 'js/app.css' )}}" />
    </head>
    <body>

        <div class="container">

            <h1 class="page-header">All Tasks - Report</h1>
            <p align="right">Generated at: {{ date("Y-m-d h:i:s")}}</p>

            <hr />

            <table class="table table-bordered table-striped" width="100%">
                <thead>
                    <tr bgcolor="#ccc">

                        <th>Name</th>
                        <th>Due Date</th>
                        <th>Assigned To</th>
                        <th>Assigned By</th>
                        <th>Completed At</th>
                        <th>Created At</th>
                        
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
                        
                    </tr>
                    @endforeach

                    @else
                    <tr>
                        <td>No tasks found</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </body>
</html>




