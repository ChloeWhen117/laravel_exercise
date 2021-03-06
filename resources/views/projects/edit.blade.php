@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
<div style="display: inline;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr />
                <h1 class="title">Editting Project</h1>
                <hr />
                <form action="/projects/{{ $project->id }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="field">
                        <label class="label" for="title">Project Title</label>

                        <div class="control">
                            <input
                                type="text"
                                class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                                name="title"
                                value="{{ $project->title }}"
                                required>
                        </div>
                    </div>

                    <div class="field" style="margin-bottom: 15px;">
                        <label class="label" for="description">Project Description</label>

                        <div class="control">
                            <textarea
                                name="description"
                                class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}"
                                required
                            >
                                {{ $project->description }}
                            </textarea>
                        </div>
                    </div>

                    <div class="field" style="margin-bottom: 15px;">
                        <div class="control">
                            <button type="submit" class="button is-link">Edit Project</button>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="notification is-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>

                <form action="/projects/{{ $project->id }}" method="POST">
                    @csrf

                    @method('DELETE')
                    <div class="control">
                        <button type="submit" class="button is-danger">Delete Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection