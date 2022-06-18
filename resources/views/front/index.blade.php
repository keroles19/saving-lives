@extends('front.layout.layout')
@section('content')

    <div class="page-hero bg-image overlay-dark" style="background-image: url({{asset('assets/img/bg_image_1.jpg')}});">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">{{$setting->subhead}}</span>
                <h1 class="display-4 text-white">{{env('APP_NAME')}}</h1>
                <a href="{{route('register')}}" class="btn btn-primary">
                    START NOW
                </a>
                <button class="btn btn-success ml-lg-3" data-bs-toggle="modal" data-bs-target="#addNewObligation">
                    Obligation
                </button>
            </div>
        </div>
    </div>

    <!--

    <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <p><span>Chat</span> with a doctors</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p><span>One</span>-Health Protection</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-basket"></span>
                            </div>
                            <p><span>One</span>-Health Pharmacy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --> <!-- .page-section -->

    <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>Welcome to Your Saving <br> Live</h1>
                    <p class="text-grey mb-4">
                        {{ \Illuminate\Support\Str::words($setting->about, 50,'....')  }}
                    </p>
                    <a href="{{url('/about')}}" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="{{asset('assets/img/bg-doctor.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->

    <div class="page-section bg-light">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Latest Articles</h1>
            <div class="row mt-5">

                @foreach($articles as $article)
                    <div class="col-lg-4 py-2 wow zoomIn">
                        <div class="card-blog">
                            <div class="header">
                                <a href="{{url('article/'.$article->id)}}" class="post-thumb">
                                    <img src="{{asset('storage/'.$article->image)}}" alt="article image">
                                </a>
                            </div>
                            <div class="body">
                                <h5 class="post-title">
                                    <a href="{{url('article/'.$article->id)}}">
                                        {{$article->title}}</a></h5>
                                <p>{{$article->short_description}}</p>
                                <div class="site-info">
                                    <span class="mai-time"></span> {{$article->created_at->diffForHumans()}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 text-center mt-4 wow zoomIn">
                    <a href="{{route('article')}}" class="btn btn-primary">Read More</a>
                </div>

            </div>
        </div>
    </div> <!-- .page-section -->


    @include('front.layout._hospital')
@endsection




