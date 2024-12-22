@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Student</div>
                    <a href="route('student.index')" class="btn btn-default test">Back</a>

                <div class="card-body">
                <form action="{{ route('student.update', $student}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form=group">
                        <label for="">Fullname</lable>
                        <input class= "form-control" type="text" name="fullname" value="{{$student->Fullname}}">
                    </div>
                    <div class="form=group">
                        <label for="">IC Number</lable>
                        <input class= "form-control" type="text" name="icnumber" value="{{$student->icnumber}}">
                    </div>
                    <div class="form=group">
                        <label for="">Classroom</lable>
                        <select class="form-control" name="classroom" id="">
                            <option value="">Class 1</option>
                            <option value="">Class 2</option>
                            <option value="">Class 3</option>
                        </select>
                    </div>
                    <br>
                    <button class="btn btn-primary">Submit</button>

                </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection