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
                        <a href="{{ url('/students') }}" class="btn btn-success btn-sm float-right"> View Students</a>
                    </h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/students/store') }}"enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="name">Fullname</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="full name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Student Email </label>
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="course">Course </label>
                            <input type="text" class="form-control" name="course" id="course" placeholder="Eg.Biology" required>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo </label>
                            <input type="file" class="form-control" name="profile_image" id="profile_image" placeholder="upload image">
                        </div>
                            <button type="submit" class="btn btn-primary btn-md" >Save Details</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection