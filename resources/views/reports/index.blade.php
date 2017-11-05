@extends('layouts.backend')

@section('css')

    {!! Charts::styles() !!}

@endsection

@section('content')

        <div class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Graphical Reports</h3>
                        </div>
                        <div class="panel-body">

                            <center>
                                {!! $user_chart->html() !!}
                            </center>

                            <center>
                                {!! $score_chart->html() !!}
                            </center>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('js')

    {!! Charts::scripts() !!}
    {!! $user_chart->script() !!}
    {!! $score_chart->script() !!}
    
@endsection
