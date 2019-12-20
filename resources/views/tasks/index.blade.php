@extends('layouts.app')


@section('content')

    <h1>タスク一覧</h1>

    @if (Auth::check())
    @if (count($tasks) > 0)
    
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>user_id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->user_id }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    @else
        <div class="jumbotron">
            <div class="text-center">
                <h1>Tasklistへようこそ</h1>
                {!! link_to_route('signup.get', '今すぐユーザー登録!!', [], ['class' => 'btn btn-primary mt-3']) !!}
            </div>
        </div>
    @endif
    
 
    
@endsection