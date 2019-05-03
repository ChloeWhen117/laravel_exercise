@extends('layouts.main')

@section('title', 'View Project')

@section('content')

    <h1>View Project</h1>

    <h2>{{ $project->title }}</h2>

        <p>{{ $project->description }}</p>

    <form action="/projects/{{ $project->id }}/edit" method="get">
        <input type="submit" value="Edit Project" 
            name="Submit" id="frm1_submit" />
    </form>


    <h3>Tasks</h3>

    @if($project->tasks->count())
        <ul id="project-tasks" style="list-style-type:none;">
            @foreach($project->tasks as $task)
                <label class="checkbox {{ $task->completed ? 'completed' : ''}}">
                    <form action="/projects/{{ $project->id }}/tasks/{{ $task->id }}" method="POST">
                        @csrf

                        @method('PATCH')

                        <input type="checkbox" name="completed" id="task-checkbox-{{ $task->id }}" onChange="this.form.submit()"{{ $task->completed ? ' checked' : '' }} />

                        <label for="task-checkbox-{{ $task->id }}">{{ $task->description }}</label>
                    </form>
                </label>
            @endforeach
        </ul>
    @else
        <p>There aren't any tasks</p>
    @endif

    <div class="field">
        <form action="/projects/{{ $project->id }}/tasks" method="POST">
            @csrf
            <label>Add Task</label>

            <div>
                <input type="text" name="description" />
            </div>

            <div>
                <button class="create" type="submit">Add Task</button>
            </div>
        </form>
    </div>

@endsection