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
                                <h3 class="panel-title">Assign User Role</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form action="{{ url( 'user/store' ) }}" method="POST" class="form-horizontal" role="form">

                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <div class="col-sm-4">Email Address:</div>
                                        <div class="col-sm-8">: {{ auth()->user()->email }}</div>
                                    </div>
                                     <div class="form-group">
                                        <div class="col-sm-4">User Name:</div>
                                        <div class="col-sm-8">: {{ auth()->user()->name }}</div>
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
