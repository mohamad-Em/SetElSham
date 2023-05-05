<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Corner\StoreRequest;
use App\Http\Requests\Admin\Corner\UpdateRequest;
use App\Models\Corner;
use Illuminate\Http\Request;

class CornerController extends Controller
{
    public function corners()
    {
        $corners = Corner::all();
        return view('admin.corners.index',compact('corners'));
    }
    public function create()
    {
        return view('admin.corners.create');
    }
    public function store(StoreRequest $request)
    {
        $data = $request->all();
        $record = Corner::create($data);
        return redirect()->route('admin.corners')->with(['success' => 'Create Successfully']);
    }
    public function edit($id)
    {
        $record = Corner::find($id);
        return view('admin.corners.edit',compact('record'));
    }
    public function update(UpdateRequest $request , $id)
    {
        $data = $request->all();
        $record = Corner::find($id);
        $record->update($data);
        return redirect()->route('admin.corners')->with(['update' => 'Update Successfully']);
    }
    public function delete($id)
    {
        $record = Corner::find($id);
        $record->delete();
        return redirect()->back()->with(['delete' => 'Delete Successfully']);

    }
}
