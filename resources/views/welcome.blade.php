@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            @if (count($tasks) >0)
                @include('tasks.tasks', ['tasks' => $tasks])
            @else {!! link_to_route('tasks.create', '新規タスクの作成', null, ['class' => 'btn btn-success']) !!}
            @endif
        </div>
        
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the TaskList</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    @endif
@endsection