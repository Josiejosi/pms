@extends('layouts.backend')

@section('css')

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    {!! Charts::styles() !!}

@endsection

@section('content')

        <div class="content">
            <div class="container-fluid">

                @include('flash::message')

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="card ">

                            <div class="content">

                                <center>
                                    {!! $tasks_chart->html() !!}
                                </center>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Rewards</h4>
                                <p class="category">Monthly Reward</p>
                            </div>
                            <div class="content">

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h2 class="title">{{ $current_score }} <small>Points</small></h2>
                                <h4 class="category">Current Score</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">My Calendar</h4>
                                <p class="category">Organized Tasks</p>
                            </div>
                            <div class="content">
                                

                                {!! $calendar->calendar() !!}
                                

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Completed Tasks
                                        <i class="fa fa-circle text-warning"></i> Incompleted Tasks
                                        <i class="fa fa-circle text-danger"></i> Over due
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-check"></i> Data information certified
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Tasks</h4>
                                <p class="category">Today's TODO</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            @foreach( $tasks as $task )
                                            <tr>
                                                <td>
                                                    <a 
                                                        href="{{ url( 'task/complete/' ) }}/{{ $task->id }}" 
                                                        class="btn btn-success btn-simple btn-sm">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </a>
                                                </td>
                                                <td>{{ $task->name }}</td>
                                                <td class="td-actions text-right">
                                                    <a href="{{ url( 'task/note/' ) }}/{{ $task->id }}" class="btn btn-info btn-simple btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{ url( 'task/destroy/' ) }}/{{ $task->id }}" class="btn btn-danger btn-simple btn-sm">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('js')
    

    {!! Charts::scripts() !!}
    {!! $tasks_chart->script() !!}

    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    {!! $calendar->script() !!}

@endsection
