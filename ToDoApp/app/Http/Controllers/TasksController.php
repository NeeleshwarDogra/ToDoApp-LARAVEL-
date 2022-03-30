<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TasksController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tasks =  Post::orderBy('created_at', 'desc')->paginate(10);
        // return view('tasks.index')->with('tasks',$tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $task = new Post;
        $task->title = $request->input('title');
        $task->body = $request->input('body');
        $task->iscompleted = '1';
        $task->user_id = auth()->user()->id;
        $task->save();

        return redirect('/home')->with('success', 'Task Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Post::find($id);
        return view('tasks.show')->with('task', $task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Post::find($id);

        if(auth()->user()->id !== $task->user_id){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }

        return view('tasks.edit')->with('task', $task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        $task = Post::find($id);
        $task->title = $request->input('title');
        $task->body = $request->input('body');
        if($request->input('iscompleted') == ''){
            $task->iscompleted = 1;
        }
        else{
            $task->iscompleted = $request->input('iscompleted');
        }
        $task->save();

        return redirect('/home')->with('success', 'Task Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Post::find($id);
        if(auth()->user()->id !== $task->user_id){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }
        $task->delete();
        return redirect('/home')->with('success', 'Task Deleted');
    }
}
