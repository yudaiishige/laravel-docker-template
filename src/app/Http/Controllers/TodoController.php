<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;

class TodoController extends Controller
{
  public function index()
  {
    return view('index');
  }
  public function store(Request $request)
     {
         $todo = $request->only(['content']);
         Todo::create($todo);

         return redirect('/');
     }
}
