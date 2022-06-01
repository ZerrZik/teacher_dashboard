@extends ('layouts.app')

@section ('content')

<div class="container">

    <div class="text-center">
        <h1>Project list</h1>
    </div>

    <div>
        <a href="{{ route('project.create') }}" class="btn btn-primary">Create new project</a>
    </div>

    {{-- Message after project is created --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <br>

    @foreach ($projects as $project)
        <a style="text-decoration:none; color:black" href=" {{ route('project.show', $project) }} ">
            <div class="card d-inline-block" style="width: 20rem;">
                <div class="card-body">
                    <h3 class="card-title">Project title: <b> {{ $project->title }} </b></h3>
                    <h4 class="card-title">Number of groups: {{ $project->group_qty }}</h4>
                    <h6 class="card-title">Students per group: {{ $project->students_per_group }}</h6>
                    <a href="{{ route('project.edit', $project) }}" class="btn btn-warning">EDIT</a>
                    <form action="{{ route('project.destroy', $project) }}" class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="DELETE">
                    </form>
                </div>
            </div>
        </a>
    @endforeach
</div>

@endsection
