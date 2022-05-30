@extends ('layouts.app')

@section ('content')

<div class="container">
    <div class="text-center">
        <h1>Create student</h1>
    </div>
    <div>
        <a href="{{ route('project.show') }}" class="btn btn-success">Back to project</a>
    </div>
    <br>

    <div class="container col-md-5">
        <form action="{{ route('student.store', $project) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="full_name">Student Full Name</label>
                <input type="text" class="form-control" name="full_name" placeholder="Enter student full name">
            </div>
            <button type="submit" class="btn btn-primary">Add student</button>
        </form>
    </div>

    @endsection