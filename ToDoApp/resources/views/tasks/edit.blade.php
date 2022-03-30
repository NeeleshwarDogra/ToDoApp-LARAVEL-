@extends('layouts.app')

@section('content')
    <h1>Add Task</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\TasksController@update', $task->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $task->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}    
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Task Description') }}
            {{ Form::textarea('body', $task->body, ['class' => 'form-control', 'placeholder' => 'Body Text']) }}    
        </div>
        <div class="form-group">
            {{ Form::label('iscompleted', 'Completed: ') }}
            {{ Form::text('iscompleted', '', ['class' => 'form-control', 'placeholder' => ' Enter anything if task is completed']) }}
        </div>
        {{ Form::submit('Submit', ['class' => 'btn btn-primary', 'style' => 'margin-top: 1rem']) }}
    {!! Form::close() !!}
@endsection