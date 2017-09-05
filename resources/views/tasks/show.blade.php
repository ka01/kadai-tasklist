@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} の詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>{{ $task->id }}</th>
        </tr>
        <tr>
            <th>タイトル</th>
            <th>{{ $task->status }}</th>
        </tr>
        <tr>
            <th>メッセージ</th>
            <th>{{ $task->content }}</th>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
  
    <div> 
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form:: close() !!}
    </div>

@endsection