@extends('layouts.main')
@section('title')
Create Offer
@endsection
@section('container')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Create Offer</h4>
                    </div>

                </div>
                <form action="{{ route('admin.offers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="name" placeholder="Name" autocomplete="off">
                        </div>
                    </div>
                    @error('name')
                    <h5 class="alert alert-danger">{{ $message }}</h5>
                    @enderror
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>
                    @error('description')
                    <h5 class="alert alert-danger">{{ $message }}</h5>
                    @enderror
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Price</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="price" placeholder="Price" autocomplete="off">
                        </div>
                    </div>
                    @error('price')
                    <h5 class="alert alert-danger">{{ $message }}</h5>
                    @enderror
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="file" name="image" placeholder="Name" autocomplete="off">
                        </div>
                    </div>
                    @error('image')
                    <h5 class="alert alert-danger">{{ $message }}</h5>
                    @enderror
            </div>
            <input type="submit" class="btn btn-primary" value="Save">
            </form>

        </div>
    </div>
</div>


@endsection
