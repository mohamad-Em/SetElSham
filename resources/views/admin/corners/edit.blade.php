@extends('layouts.main')
@section('title')
Edit Corner
@endsection
@section('container')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Edit Corner</h4>
                    </div>

                </div>
                <form action="{{ route('admin.corners.update',$record->id) }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="name" value="{{ $record->name }}" placeholder="Name" autocomplete="off">
                        </div>
                    </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Update">
            </form>

        </div>
    </div>
</div>


@endsection
