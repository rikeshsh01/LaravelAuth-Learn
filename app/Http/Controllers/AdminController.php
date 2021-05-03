<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $data=Todo::all();
        return view('admin.admin',['todo'=>$data]);
        // return view();
    }
    public function new(){
        return view('admin.new');
    }

    public function store(Request $request)
    {
        $data=$request->all();
        Todo::create($data);

       
        // $status->save();
        // return $data;
        return redirect('/admin');

        
    }

    public function edit($id)
    {
        $data= Todo::find($id);
        // return $data;
        return view('admin.edit',['edit'=>$data]);
    }

    public function update(Request $request, $id)
    {
        $data  = Todo::findOrFail($id);
        $input = $request->all();
        $data->fill($input)->save();

        return redirect('/admin');

    }

    public function delete($id)
    {
        $data=Todo::findOrFail($id);
        $data->delete();
        return redirect()->back();

    }
}
