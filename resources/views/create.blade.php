@extends('master')


@section('title')  Create Post @endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h2 class="mb-0">Hello.....</h2>

                            </div>
                            <div class="">
                                <a href="{{ route('post.index') }}" class="btn btn-lg btn-outline-primary">Home</a>
                            </div>
                        </div>
                        <div class="">
                            <form action="{{ route('post.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Post Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Post Title</label>
                                    <textarea name="description" id="" class="form-control " rows="10"></textarea>
                                </div>
                                <div class="text-center" >
                                    <button  @class('btn btn-lg btn-primary')>Add Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
