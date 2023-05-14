<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\offer\StoreRequest;
use App\Http\Requests\Admin\offer\UpdateRequest;
use App\Http\Traits\imageTrait;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    use imageTrait;
    public function offers()
    {
        $offers = Offer::all();
        return view('admin.offers.index', compact('offers'));
    }
    public function create()
    {
        return view('admin.offers.create');
    }
    public function store(StoreRequest $request)
    {
        $data = $request->all();
        $data['image'] = $this->saveImage($request->image, 'vendors/images/offers');
        $store = Offer::create($data);
        if ($store) {
            return redirect()->route('admin.offers')->with(['success' => 'Create Successfully']);
        }
    }
    public function edit($id)
    {
        $record = Offer::find($id);
        return view('admin.offers.edit', compact('record'));
    }
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->all();
        $record = Offer::find($id);
        $record->update($data);
        return redirect()->route('admin.offers')->with(['update' => 'Update Successfully']);
    }
    public function delete($id)
    {
        $record = Offer::find($id);
        $record->delete();
        return redirect()->route('admin.offers')->with(['delete' => 'Delete Successfully']);
    }
}
