<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoAppController extends Controller
{
    public function index(){
        return view('todoapp.main');
    }

    public function about(){
        return view('todoapp.about');
    }

}
