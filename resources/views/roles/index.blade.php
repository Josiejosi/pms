@extends('layouts.backend')

@section('css')


@endsection

@section('content')

        <div class="content">
            <div class="container-fluid">

                @include('flash::message')

                <div class="row">

                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Roles</h3>
                            </div>
                            <div class="panel-body">

                                <form action="{{ url( 'role/store' ) }}" method="POST" class="form-horizontal" role="form">

                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <div class="col-sm-4">Role Name:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="text" 
                                                name="role"
                                                class="form-control" 
                                                title="Role Name">
                                        </div>
                                    </div>
                               
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-success btn-block">Create Role</button>
                                        </div>
                                    </div>
                                </form>

                                <hr />

                                <form action="{{ url( 'permission/store' ) }}" method="POST" class="form-horizontal" role="form">

                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <div class="col-sm-4">Permission Name:</div>
                                        <div class="col-sm-8">
                                            <input 
                                                type="text" 
                                                name="permission"
                                                class="form-control"
                                                title="Permission Name">
                                        </div>
                                    </div>
                               
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-success btn-block">Create Permission</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Users</h3>
                            </div>
                            <div class="panel-body">

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
                                                    <a href="{{ url( 'user/role' ) }}/{{ $user->id }}" class="btn btn-sm btn-danger">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
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
        </div>

@endsection

@section('js')



@endsection
