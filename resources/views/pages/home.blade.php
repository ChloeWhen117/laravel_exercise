@extends('layouts.main')

@section('title', 'Home')

@section('content')
<h1 class="title">Home</h1>

</html>
    <div>
        <p>Welcome home!</p>
        </br>
        <p>Why not <a href="/contact">contact us</a>?</p>
        </br>
        <h2>My Tasks</h2>

        <ul style="list-style-type: none;">

        @foreach($tasks as $task)

            <li><input type="checkbox" {{ $task['completed'] ? 'checked' : '' }} /> {{ $task['task'] }}</li>

        @endforeach

        </ul>
    </div>
@endsection