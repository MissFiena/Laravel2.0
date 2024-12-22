@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listing</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>Number</th>
                            <th>Fullname</th>
                            <th>IC Number</th>
                            <th>Classroom</th>
                            <th width="210px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $loop->Fullname}}</td>
                                <td>{{ $loop->icnumber}}</td>
                                <td>{{ $loop->classroom}}</td>
                                <td>
                                    <a href="{{route('students.show', $student) }}" class ="btn btn-primary" >View</a>
                                    <a href="{{route('students.edit', $student) }}" class ="btn btn-warning" >Edit</a>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                                
                            @endforeach

                        </tbody>
                    </table>      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



