@extends('layouts.layout')

@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success" role="alert">
            Subscribed
        </div>
    @endif

    <div class="mb-5 row">
        @foreach ($quizzes as $quiz)
            @if ($quiz->image)
                <div class="card" style="margin-top: 10px; float: left; margin-left: 10px; width: 16.5rem;">
                    <img class="card-img-top" src="{{ $quiz->image }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $quiz->title }}</h5>
                        <h6 class="card-title">{{ $quiz->status ? 'Active' : 'Inactive' }}</h6>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
