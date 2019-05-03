@extends('layouts.main')

@section('title', 'View Project')

@section('content')

    <ul>
        <li><a href="/projects/{{ $project->id }}/edit">Edit Project</a>
    </ul>

    <hr />

    <h1>View Project</h1>

    <hr />

    <h2>{{ $project->title }}</h2>

        <p>{{ $project->description }}</p>

    <h3>Tasks</h3>

    @if($project->tasks->count())
        <ul id="project-tasks" style="list-style-type:none;">
            @foreach($project->tasks as $task)
                <li class="{{ $task->completed ? 'completed' : ''}}">
                    <form action="/projects/{{ $project->id }}/tasks/{{ $task->id }}" method="POST">
                        @csrf

                        @method('PATCH')

                        <input type="checkbox" name="completed" id="task-checkbox-{{ $task->id }}" onChange="this.form.submit()"{{ $task->completed ? ' checked' : '' }} />

                        <label for="task-checkbox-{{ $task->id }}">{{ $task->description }}</label>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>There aren't any tasks</p>
    @endif

    <h4>Add Task</h4>

    <form action="/projects/{{ $project->id }}/tasks" method="POST">
        @csrf

        <div>
            <input type="text" name="description" />
        </div>

        <div>
            <button class="create" type="submit">Add Task</button>
        </div>
    </form>

    <form action="/projects/{{ $project->id }}/edit" method="get">
        <input type="submit" value="Edit Project" 
            name="Submit" id="frm1_submit" />
    </form>

@endsection