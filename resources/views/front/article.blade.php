@extends('front.layout.layout')

@section('content')

    @include('front.layout._crumb',['page_name'=>'Article'])



    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($allArticle as $article)
                            <div class="col-sm-6 py-3">
                                <div class="card-blog">
                                    <div class="header">
                                        <a href="{{url('article/'.$article->id)}}" class="post-thumb">
                                            <img src="{{asset('storage/'.$article->image)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <h5 class="post-title"><a href="{{url('article/'.$article->id)}}">
                                                {{$article->title}}
                                            </a></h5>
                                        <p>{{$article->short_description}}</p>
                                        <div class="site-info">
                                            <span class="mai-time"></span>{{$article->created_at->diffForHumans()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-12 my-5">
                            <nav aria-label="Page Navigation justify-content-center">
                              {{$allArticle->links()}}
                            </nav>
                        </div>
                    </div> <!-- .row -->
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
                                        <p>{{$article->short_description}}</p>
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


@section('js')
   <script>
       $(document).ready(function(){
           // Setting Pagination Bulma Class
           $('.pagination').addClass("justify-content-center");
       });
   </script>
@endsection
