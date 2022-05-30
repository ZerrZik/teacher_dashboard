@extends ('layouts.app')

@section ('content')

<div class="container">
    <div class="text-center">
        <h1>Project: {{$project->title}} </h1>
    </div>
    <div>
        <a href="{{ route('project.index') }}" class="btn btn-success">Back to projects</a>
    </div>
    <br>

    <div class="container mt-5">
        <div class="row my-2">
            <div class="col">
                <h6>Project: <b> {{ $project->title }} </b></h6>
                <h6>Number of groups: <b>{{ $project->group_qty }}</b></h6>
                <h6>Students per group: <b>{{ $project->students_per_group }}</b></h6>
            </div>
        </div>
    </div>

</div>
@endsection
