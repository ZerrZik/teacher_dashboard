@extends ('layouts.app')

@section ('content')

<div class="container">
    <div class="text-center">
        <h1>Project list</h1>
    </div>
    <div>
        <a href="{{ route('project.create') }}" class="btn btn-primary">Create new project</a>
    </div>
    <br>
    @foreach ($projects as $project)
    <div class="card d-inline-block" style="width: 20rem;">
        <a style="text-decoration:none; color:black" href="{{ route('project.show', compact('project')) }}">
            <div class="card-body">
                <h3 class="card-title">Project title: <b> {{ $project->title }} </b></h3>
                <h4 class="card-title">Number of groups: {{ $project->group_qty }}</h4>
                <h6 class="card-title">Students per group: {{ $project->students_per_group }}</h6>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </div>
        </a>
    </div>
    @endforeach
</div>

@endsection
