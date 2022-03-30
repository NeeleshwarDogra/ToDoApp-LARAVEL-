{{-- @extends('layouts.app')

@section('content')
    <h1 class="text-center">Tasks</h1>
    @if (count($tasks) > 0)
        @foreach ($tasks as $task)
            @if ($task->iscompleted == '1')
                <a href="/ToDoApp/public/posts/{{ $task->id }}" style="color: black; text-decoration: none">
                    <div class="p-3 card m-3">
                        <h3>{{ strtoupper($task->title) }}</h3>
                        <h4>{!! $task->body !!}</h4>
                        <small>Added on {{ $task->created_at }}</small>
                    </div>
                </a>            
            @endif
            @if ($task->iscompleted != '1')
                <a href="/ToDoApp/public/posts/{{ $task->id }}" style="color: black; text-decoration: none">
                    <div class="p-3 card m-3" style="background-color: green; ">
                        <h3>{{ strtoupper($task->title) }}</h3>
                        <h4>{!! $task->body !!}</h4>
                        <small>Added on {{ $task->created_at }}</small>
                    </div>
                </a>          
            @endif
        @endforeach
        {{ $tasks->links()  }}
    @endif
    @if (count($tasks) < 1)
        <div class="text-center" style="padding: 2rem 1rem;
        margin-top: 3rem;
        margin-left:5rem;
        margin-bottom: 2rem;
        background-color: #e9ecef;
        border-radius: .3rem;">
            <h1 class="display-7">No Tasks Present</h1>
        </div>
    @endif
@endsection --}}