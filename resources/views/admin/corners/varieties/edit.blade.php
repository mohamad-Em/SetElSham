@extends('layouts.main')
@section('title')
Edit Varietie
@endsection
@section('container')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Edit Varietie</h4>
                    </div>

                </div>
                <form action="{{ route('admin.corners.varieties.update',$record->id) }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="name" value="{{ $record->name }}" placeholder="Name" autocomplete="off">
                        </div>
                    </div>
                    @error('name')
                    <h5 class="alert alert-danger">{{ $message }}</h5>
                    @enderror
                    @if($record->type != Null)
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Type</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="type" value="{{ $record->type }}" placeholder="Type" autocomplete="off">
                        </div>
                    </div>
                    @error('type')
                    <h5 class="alert alert-danger">{{ $message }}</h5>
                    @enderror
                    @endif
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Price</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="price" value="{{ $record->price }}" placeholder="Price" autocomplete="off">
                        </div>
                    </div>
                    @error('price')
                    <h5 class="alert alert-danger">{{ $message }}</h5>
                    @enderror
                    @if($record->size != Null)
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Size</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="size" value="{{ $record->size }}" placeholder="Size" autocomplete="off">
                        </div>
                    </div>
                    @error('size')
                    <h5 class="alert alert-danger">{{ $message }}</h5>
                    @enderror
                    @endif
                    @if($record->extras != Null)
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Extras</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea class="form-control" name="extras">{{ $record->extras }}</textarea>
                        </div>
                    </div>
                    @error('extras')
                    <h5 class="alert alert-danger">{{ $message }}</h5>
                    @enderror
                    @endif
                    <input type="text" name="corner_id" hidden value="{{ $record->corner_id }}">
            </div>
            <input type="submit" class="btn btn-primary" value="Save">
            </form>

        </div>
    </div>
</div>


@endsection
