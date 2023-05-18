@extends('admin.website.layout.main')

@section('container')
<div class="content">
    <div class="row">
        @foreach ($corners as $row)

        <div class="col-md-4">


            <div class="card card-user">

                <div class="image">
                </div>
                <div class="card-body">
                    <div class="author">
                        <a href="{{ route('website.show',$row->id) }}">
                            <img class="avatar border-gray" src="{{ asset('vendors/images/corners/'.$row->image) }}" alt="...">
                            <h5 class="title">{{ $row->name }}</h5>
                        </a>

                    </div>

                </div>

            </div>
        </div>
        @endforeach

    </div>

</div>

@endsection
