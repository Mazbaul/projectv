@extends('adminlte::layouts.app')


@section('main-content')

    <div class="row">
        <div class="col-md-10">

            <h1>New STUDENTS Request</h1>

        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead style="background-color:white;">
                <th>#</th>
                <th>Name</th>
                <th>Student Id</th>
                <th>Email</th>
                <th>Session</th>
                <th>Department</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($user as $user)
                    <tr style="background-color:white;">
                        <th>{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->studentid}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->academicssn}}</td>
                        <td>{{$user->department->name}}</td>
                        <td><a href="{{route('users.update',$user->id)}}" class="btn btn-sm btn-danger">click to Approve</a> </td>


                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@endsection
