<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Corner\Varietie\StoreRequest;
use App\Http\Requests\Admin\Corner\Varietie\UpdateRequest;
use App\Http\Traits\imageTrait;
use App\Models\Corner;
use App\Models\Varietie;
use Illuminate\Http\Request;

class VarietieController extends Controller
{
    use imageTrait;
    public function varieties($cornerId)
    {
        $cornerID = Corner::find($cornerId);
        $records = Varietie::whereHas('corner')->where('corner_id',$cornerId)->get();
        return view('admin.corners.varieties.varieties',compact('cornerId','records'));
    }
    public function create($cornerId)
    {
        $cornerId = Corner::find($cornerId);
        return view('admin.corners.varieties.create',compact('cornerId'));
    }
    public function store(StoreRequest $request)
    {
        $data = $request->all();
        $data['image'] = $this->saveImage($request->image, 'vendors/images/varietie');
        $record = Varietie::create($data);
        return redirect()->route('admin.corners.varieties',$data['corner_id'])->with(['success' => 'Create Successfully']);
    }
    public function edit($id)
    {
        $record = Varietie::find($id);
        return view('admin.corners.varieties.edit',compact('record'));
    }
    public function update(UpdateRequest $request , $id)
    {
        $data = $request->all();
        $record = Varietie::find($id);
        $record->update($data);
        return redirect()->route('admin.corners.varieties',$data['corner_id'])->with(['update' => 'Update Successfully']);
    }
    public function delete($id)
    {
        $record = Varietie::find($id);
        $record->delete();
        return redirect()->back()->with(['delete' => 'Delete Successfully']);
    }
}
