@extends('layouts.main')

@section('title', 'View Projects')

@section('content')

    <hr />

    <h1>View All Projects</h1>

    <hr />


    <ul>

    @foreach($projects as $project)

        <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>

    @endforeach

    </ul>

    <form action="/projects/create" method="get">
        <input type="submit" value="Create a New Project" 
            name="Submit" id="frm1_submit" />
    </form>

@endsection