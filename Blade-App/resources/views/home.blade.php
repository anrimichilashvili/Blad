@extends('layouts.layout')
@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success" role="alert">
            Subscribed
        </div>
    @endif
    <div class="mb-5 row">

        @foreach ($data as $item)
            <div class="card" style="margin-top:10px; float:left; margin-left:10px; width: 16.5rem;">
                <img class="card-img-top" src="{{ $item['image'] }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['name'] }}</h5>
                    <h6 class="card-title">{{ $item['status'] ? 'Active' : 'Inactive' }}</h6>
                </div>
            </div>
        @endforeach
    </div>
@endsection
