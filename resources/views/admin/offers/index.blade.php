@extends('layouts.main')
@section('title')
Offers
@endsection
@section('container')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- basic table  Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">All Offers</h4>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('admin.offers.create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>
                @if(Session::has('success'))
                <h5 class="alert alert-success">{{ Session::get('success') }}</h5>
                @elseif(Session::has('update'))
                <h5 class="alert alert-success">{{ Session::get('update') }}</h5>
                @elseif(Session::has('delete'))
                <h5 class="alert alert-success">{{ Session::get('delete') }}</h5>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $num = 1;
                        @endphp
                        @foreach ($offers as $row )
                        <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->price }}</td>
                            <td><img src="{{ asset('vendors/images/offers/'.$row->image) }}" width="200"></td>
                            <td>
                                <a href="{{ route('admin.offers.edit',$row->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('admin.offers.delete',$row->id) }}" class="btn btn-danger" onclick="return confirm('Are You Sure Delete Offer ?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>
@endsection
