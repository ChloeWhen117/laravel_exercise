@extends('layouts.main')

@section('title', 'View Project')

@section('content')
    <div style="display: inline-block;">
        <hr />
        <h1 class="title">{{ $project->title }}</h1>
        <hr />

        <p>{{ $project->description }}</p>

        <form action="/projects/{{ $project->id }}/edit" method="get">
            <div class="field">
                <div class="control">
                    <button type="submit" class="button">Edit Project</button>
                </div>
            </div>
        </form>


        <h3>Tasks</h3>

        @if($project->tasks->count())
            <div>
                <ul id="project-tasks" style="list-style-type:none;">
                    @foreach($project->tasks as $task)
                        <form method="POST" action="/tasks/{{ $task->id }}">
                            @method('PATCH')
                            @csrf

                            <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}"         for="completed">
                                <input 
                                    type="checkbox" 
                                    name="completed" 
                                    onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                {{ $task->description }}
                            </label>
                        </form>
                    @endforeach
                </ul>
            </div>
        @else
            <p>There aren't any tasks</p>
        @endif
        <form action="/projects/{{ $project->id }}/tasks" method="POST">
            @csrf
            <div class="field">
                <label class="label" for="task">Add Task</label>
                <div class="control">
                    <textarea
                        name="description"
                        class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}"
                        required
                    >
                    </textarea>
                </div>

                <div class="control">
                    <button type="submit" class="button">Add Task</button>
                </div>
            </div>
        </form>
    </div>
@endsection