@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>新規登録</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', '名前') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password_confirmation', '確認用パスワード') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                    {!! Form::submit('登録する', ['class' => 'btn btn-block btn-primary']) !!}
            {!! Form::close() !!}
            
        </div>
    </div>
@endsection