@extends('front.layout.layout')

@section('content')

    @include('front.layout._crumb',['page_name'=>'About Us'])

    <div class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp">
                    <h1 class="text-center mb-3">Welcome to Your {{env('APP_NAME')}}</h1>
                    <div class="text-lg">
                        <p>{{$setting->about}}</p>
                    </div>
                </div>
    @include('front.layout._hospital')
            </div>
        </div>
    </div>


@endsection
