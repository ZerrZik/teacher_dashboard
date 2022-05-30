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

    {{-- Table to add or delete students --}}
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Student</th>
                <th scope="col">Group</th>
                <th scope="col">Actions</th>
              </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
              </tr>
        </tbody>
      </table>
</div>
@endsection
