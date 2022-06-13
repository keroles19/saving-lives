@extends('front.layout.layout')

@section('content')


    <div class="page-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumb bg-transparent py-0 mb-5">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('article')}}">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$article->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div> <!-- .row -->

            <div class="row">
                <div class="col-lg-8">

                    <article class="blog-details">
                        <div class="post-thumb">
                            <img src="{{asset('storage/'.$article->image)}}" alt="">
                        </div>
                        <div class="post-meta">
                            <div class="post-author">
                                <span class="text-grey">By</span> <a href="{{route('home')}}">{{env('APP_NAME')}}</a>
                            </div>
                            <span class="divider">|</span>
                            <div class="post-date">
                                <span >{{$article->created_at->diffForHumans()}}</span>
                            </div>
                        </div>
                        <h2 class="post-title h1">{{$article->title}}</h2>
                        <div class="post-content">
                            {!! $article->description !!}
                        </div>
                    </article> <!-- .blog-details -->

                </div>


                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-block">
                            <h3 class="sidebar-title">Recent Blog</h3>
                            @foreach($recentArticle as $article)
                                <div class="blog-item">
                                    <a class="post-thumb" href="">
                                        <img src="{{asset('storage/'.$article->image)}}" alt="image article">
                                    </a>
                                    <div class="content">
                                        <h5 class="post-title"><a href="{{url('article/'.$article->id)}}">{{$article->title}}</a></h5>
                                        <div class="meta">
                                            <a href="#"><span class="mai-calendar"></span>{{$article->created_at->diffForHumans()}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .page-section -->


@endsection
