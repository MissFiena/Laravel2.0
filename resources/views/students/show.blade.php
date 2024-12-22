@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Student</div>
                    <a href="{{route('student.index')}}" class="btn btn-default test">Back</a>

                <div class="card-body">
                    <b>Fullname: </b> {{$student->Fullname}} <br>
                    <b>IC Number: </b> {{$student->icnumber}} <br>
                    <b>Classroom: </b> {{$student->classroom}} <br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection