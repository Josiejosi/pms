@extends('layouts.backend')

@section('css')


@endsection

@section('content')

        <div class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Rewards</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                <a href="{{ url( 'reward/create' ) }}" class="btn btn-xs btn-primary">
                                    <i class="fa fa-plus-square-o"></i> New Reward
                                </a>
                                <a href="{{ url( 'rewards/pdf' ) }}" target="_blank" class="btn btn-xs btn-danger">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                </a>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Points / Score</th>
                                            <th><i class="fa fa-plus-square-o"></i> Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ( ! empty( $rewards ) )
                                        @foreach( $rewards as $reward )
                                        <tr>
                                            
                                            <td>{{ $reward->name }}</td>
                                            <td>{{ $reward->description }}</td>
                                            <td>{{ $reward->score }}</td>

                                            <td>
                                                <a 
                                                    href="{{ url( 'reward/destroy' ) }}/{{ $reward->id }}" 
                                                    class="btn btn-xs btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                            
                                        </tr>
                                        @endforeach

                                        @else
                                        <tr>
                                            <td>No rewards found.</td>
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
