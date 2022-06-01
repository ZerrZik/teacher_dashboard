@extends ('layouts.app')

@section ('content')

<div class="container">
    <div class="text-center">
        <h1>Edit project</h1>
    </div>
    <div>
        <a href="{{ route('project.index') }}" class="btn btn-success">Back to projects</a>
    </div>
    <br>

    <div class="container col-md-5">
        <form action="{{ route('project.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Project title</label>
                <input type="text" class="form-control" name="title" value="{{ $project->title }}">
            </div>
            <div class="form-group">
                <label for="group_qty">Number of groups</label>
                <input type="number" class="form-control" name="group_qty" value="{{ $project->group_qty }}">
            </div>
            <div class="form-group">
                <label for="students_per_group">Students per group</label>
                <input type="number" class="form-control" name="students_per_group" value="{{ $project->students_per_group }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    @endsection