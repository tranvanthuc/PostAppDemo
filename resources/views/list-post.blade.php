@extends('layouts.app')

@section('title')
    List Posts
@endsection

@section('head')
    <link rel="stylesheet" href={{ asset('css/list-post.css') }}>
@endsection

@section('content')
    {{-- header --}}
    <div class="header py-3">
        <div class="container">
            <h1 class="text-danger title">Laravel Tutorials</h1>
            <p class="desc">Interested in learning more about Laravel? This section features tutorials on everything from getting started with Laravel, to expert topics, and everything in between.</p>
        </div>
    </div>
    {{-- end header --}}
    
    {{-- content --}}
    <div class="content py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="text-danger">Popular Laravel Tutorials</h1>
                <h3><a href={{ route('create-post') }} >Create Post</a></h3>
            </div>
            <div class="row">
                @forelse ($posts as $post)
                    <a class="col-4 text-decoration-none"  href={{ route('detail-post', compact('post')) }}>
                        <div class="card item-post my-3" >
                            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="thumbnail-post">
                            <div class="card-body item-post-body">
                                <p>{{ $post->created_at }}</p>
                                <h5 class="card-title font-weight-bold">{{ $post->title }}</h5>
                            </div>
                            <div class="p-3">
                                <button class="float-left btn btn-info">Edit</button>
                                <button class="float-right btn btn-danger">Delete</button>
                            </div>
                        </div>
                        
                    </a>
                @empty
                    <div class="w-100 text-center">
                        <h3 class="font-weight-bold">There are no posts here.</h3>
                    </div>
                @endforelse
            </div>

            {{-- pagination --}}
            @isset ($posts)
                <div class="d-flex justify-content-center w-100">
                    {{ $posts->render() }}
                </div>
            @endisset
        </div>
    </div>
    {{-- end content --}}
@endsection