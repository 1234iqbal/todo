<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
class TodoController extends Controller
{
    public function show()
    {
        $todo = todo::all();
        return view('todo', ['todo'=>$todo] );
    }
    public function store(Request $req)
    {
        $todo = new todo;
        $todo->nama = $req->nama;
        $todo->save();

        return redirect()->back();
    }
    public function edit($id)
    {
        $todo = todo::find($id);
        return view('edit',['todo'=>$todo]);
    }
    public function update(Request $req, $id)
    {
        $todo = todo::find($id);
        $todo->nama = $req->nama;
        $todo->save();
        return redirect('/todo');
    }
    public function destroy($id)
    {
        $todo = todo::find($id);
        $todo->delete();

        return redirect('/todo');
    }
}
