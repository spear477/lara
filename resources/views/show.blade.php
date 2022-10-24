@extends('master')


@section('title') {{ $post->title }} @endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h2 class="mb-0">Post Detail</h2>
                                <p class="mb-0 text-black-50">What's on your mind?</p>
                            </div>
                            <div class="">
                                <a href="{{ route('post.index') }}" class="btn btn-lg btn-outline-primary">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="card my-3">
                        <div class="card-body">
                            <h4 @class('card-title fw-bold')>{{ $post-> title }}</h4>
                            <p class="card-text text-black-50"> {{ $post->description }}</p>

                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
