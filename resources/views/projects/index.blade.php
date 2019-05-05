@extends('layouts.app')

@section('title', 'View Projects')

@section('content')

    <hr />
    <h1 class="title">My Projects</h1>
    <hr />
    @if($projects->count())
        <ul>
            @foreach($projects as $project)
                <li>
                    <a 
                        href="/projects/{{ $project->id }}">{{ $project->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>There aren't any projects</p>
    @endif

    <form style="margin-top:10px" action="/projects/create" method="get">
        <input type="submit" value="Create a New Project" 
            name="Submit" id="frm1_submit" />
    </form>

@endsection