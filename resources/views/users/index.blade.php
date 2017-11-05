@extends('layouts.backend')

@section('css')


@endsection

@section('content')

        <div class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Users</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                <a href="{{ url( 'user/create' ) }}" class="btn btn-sm btn-primary" title="New user">
                                    <i class="fa fa-plus-square-o"></i> New user
                                </a>
                                <a href="{{ url( 'user/pdf' ) }}" target="_blank" class="btn btn-sm btn-danger">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                </a>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>Name</th>
                                            <th><i class="fa fa-plus-square-o"></i> Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ( ! empty( $users ) )
                                        @foreach( $users as $user )
                                        <tr>
                                            
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->name }}</td>

                                            <td>
                                                <a href="{{ url( 'user/destroy' ) }}/{{ $user->id }}" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                            
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('js')



@endsection
