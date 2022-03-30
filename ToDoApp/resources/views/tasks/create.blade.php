@extends('layouts.app')

@section('content')
    <h1>Add Task</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\TasksController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}    
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Task Description') }}
            {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text']) }}    
        </div>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary', 'style' => 'margin-top: 1rem']) }}
    {!! Form::close() !!}
@endsection