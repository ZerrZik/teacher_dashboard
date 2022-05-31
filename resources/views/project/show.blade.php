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
    <br>
    <h3>Students</h3>
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
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->full_name }}</td>
                <td>
                    @php
                    $group = $student->groups()->where('student_id', $student->id)->where('project_id',$project->id)->first();
                    @endphp
                    @if ($group)
                    Group #{{ $group->number }}
                    @else
                    -
                    @endif
                </td>
                <td>
                    <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="project_id" value="{{ $project->id }}">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route('student.create', $project) }}">Add Student</a>
    <br>
    <br>

    <h3>Groups</h3>

    <div class="col-6">
        <div class="row my-4">
            <h1>Groups</h1>
            {{-- Creating group tables with option fields --}}
            @for ($i = 1; $i <= $project->group_qty; $i++)
                <div class="col-5 me-3">
                    <table class="table table-bordered text-center">
                        <thead class="table-secondary">
                            <tr>
                                <th>Group #{{$i}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($j = 0; $j < $project->students_per_group; $j++)
                                <tr>
                                    <td class="p-0">
                                        <form action="{{route('group.store')}}" onchange="submit();" method="POST">
                                            @csrf
                                            <select name="full_name" class="form-select">
                                                <option value="">Assign student</option>
                                                @foreach ($students as $student)
                                                        <option value="{{$student->full_name}}">{{$student->full_name}}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" name="project_id" value="{{$project->id}}">
                                            <input type="hidden" name="number" value="{{$i}}">
                                        </form>
                                    </td>
                                </tr>  
                            @endfor
                        </tbody>
                    </table>
                </div>
            @endfor
        </div>



    


</div>
@endsection
