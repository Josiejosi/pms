<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>All Rewards - Report</title>
        <link rel="stylesheet" href="{{ asset( 'js/app.css' )}}" />
    </head>
    <body>

        <div class="container">

            <h1 class="page-header">All Rewards - Report</h1>
            <p align="right">Generated at: {{ date("Y-m-d h:i:s")}}</p>

            <hr />

            <table class="table table-bordered table-striped" width="100%">
                <thead>
                    <tr bgcolor="#ccc">

                        <th>Name</th>
                        <th>Description</th>
                        <th>Points / Score</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @if ( ! empty( $rewards ) )
                    @foreach( $rewards as $reward )
                    <tr>
                        
                        <td>{{ $reward->name }}</td>
                        <td>{{ $reward->description }}</td>
                        <td>{{ $reward->score }}</td>
                        
                    </tr>
                    @endforeach

                    @else
                    <tr>
                        <td>No users found</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </body>
</html>




