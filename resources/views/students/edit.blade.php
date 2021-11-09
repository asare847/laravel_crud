@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="row">
        </div class="col-md-12">
        @if (session('status'))
            <p class="alert alert-success">{{ session('status') }}</p>
        @endif
            <div class="card">
                <div class="card-header">
                    <h2> Add Student with Image
                        <a href="{{ url('/students') }}" class="btn btn-success btn-sm float-end"> View Students</a>
                    </h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('students/update/'.$student->id) }}"enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="name">Fullname</label>
                          <input type="text" class="form-control" value="{{$student->name }}"name="name" id="name" placeholder="full name">
                        </div>
                        <div class="form-group">
                            <label for="email">Student Email </label>
                            <input type="email" class="form-control" name="email" value="{{$student->email }}" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="course">Course </label>
                            <input type="text" class="form-control" name="course"  value="{{$student->course }}"id="course" placeholder="Eg.Biology">
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo </label>
                            <input type="file" class="form-control" name="profile_image" id="poto" >
                        </div>
                        <div class="form-group">
                        <img src="{{ asset('uploads/students/'.$student->profile_image) }}" width="300px">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-md"  style="margin-top: 5px">Update Details</button>
                        </div>

                      </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection