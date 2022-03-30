@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/ToDoApp/public/posts/create" class="btn btn-primary">Add Tasks</a><br><br>
                    <h3>Your Tasks: </h3>
                    @if(count($tasks) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Task Desc.</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($tasks as $task)
                                @if ($task->iscompleted != '1')
                                    <tr style="background-color:#02ab2c">
                                        <td>{{ $task->title }}</td>
                                        <td>{!! $task->body !!}</td>
                                        <td><a href="/ToDoApp/public/posts/{{ $task->id }}/edit" class="btn btn-info">Edit</a></td>
                                        <td>{!! Form::open(['action' => ['App\Http\Controllers\TasksController@destroy',$task->id], 'method' => 'DELETE', 'class' => 'float-right' ]) !!}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {!! Form::close() !!}</td>
                                    </tr>
                                @endif
                                @if ($task->iscompleted == 1)
                                    <tr>
                                        <th>{{ $task->title }}</th>
                                        <th>{!! $task->body !!}</th>
                                        <th><a href="/ToDoApp/public/posts/{{ $task->id }}/edit" class="btn btn-info">Edit</a></th>
                                        <th>{!! Form::open(['action' => ['App\Http\Controllers\TasksController@destroy',$task->id], 'method' => 'DELETE', 'class' => 'float-right' ]) !!}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {!! Form::close() !!}</th>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    @else
                        <h5>You have no added tasks.</h5>
                    @endif    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
