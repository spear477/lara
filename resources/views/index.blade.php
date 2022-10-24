@extends('master')


@section('title') Sample_blog Home @endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h2 class="mb-0">Hello.....</h2>
                                <p class="mb-0 text-black-50">What's on your mind?</p>
                            </div>
                            <div class="">
                                <a href="{{ route('post.create') }}" class="btn btn-lg btn-outline-primary">Create Post</a>
                            </div>
                        </div>
                    </div>
                </div>
                @if(session('status'))
                    <div class="alert alert-success my-3"> {{ session('status') }}</div>
                    @endif

                @foreach($posts as $post)
                <div class="card my-3">
                    <div class="card-body">
                        <h4 @class('card-title fw-bold')>{{ $post-> title }}</h4>
                        <p class="card-text text-black-50"> {{ Str::words( $post->description,30) }}</p>
                        <div class="d-flex justify-content-between">
                            <p>{{ $post->created_at->format("d M Y | n:i A") }}</p>
                            <div class="">
                                <a href="{{ route('post.edit',$post->id) }}" @class('btn btn-info')>Edit</a>
                                <form action="{{ route('post.destroy',$post->id) }}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger">Del</button>
                                </form>
                                <a href="{{ route('post.show',$post->id) }}" @class('btn btn-primary')>See More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
