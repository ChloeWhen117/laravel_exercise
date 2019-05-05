@extends('layouts.app')

@section('title', 'View Projects')

@section('content')
<div style="display: inline;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <hr />
                <h1 class="title">My Projects</h1>
                <hr />
                @if($projects->count())
                    <ul>
                        @foreach($projects as $project)
                            <li>
                                <a href="/projects/{{ $project->id }}">
                                    {{ $project->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>There aren't any projects</p>
                @endif


                <form  action="/projects/create" method="get" style="margin-top:15px">
                    <div class="control">
                        <button type="submit" class="button is-link"> Create a New Project </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection