{{-- @extends('layouts.app')

@section('content')
    <a href="/ToDoApp/public/posts" class="btn btn-outline-secondary">Go Back</a><br><br>
    <h1>{{ $task->title }}</h1>
    <div>
        {!! $task->body !!}
    </div>
    <hr><small>Added on {{ $task->created_at }}</small>
    <br><br>
    <a href="/ToDoApp/public/posts/{{ $task->id }}/edit" class="btn btn-outline-secondary">Edit</a>

    {!! Form::open(['action' => ['App\Http\Controllers\TasksController@destroy',$task->id], 'method' => 'DELETE', 'class' => 'float-right' ]) !!}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger', 'style' => 'margin-top: 1rem']) }}
    {!! Form::close() !!}
@endsection --}}