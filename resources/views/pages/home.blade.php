@extends('layouts.app')

@section('title', 'Home')

@section('content')

</html>
<div style="display: inline;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title">Home</h1>
                <hr />
                <p>Welcome home!</p>
                </br>
                <p>Why not <a href="/contact">contact us</a>?</p>
                </br>

                <div class="card">
                    <div class="card-body">
                        <h5 class="title">My Tasks</h5>
                        <ul style="list-style-type: none;">
                            @foreach($tasks as $task)
                                <li><input type="checkbox" {{ $task['completed'] ? 'checked' : '' }} /> {{ $task['task'] }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection