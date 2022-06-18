@extends('hospital.layouts.layouts')



@section('content')

    <section class="invoice-preview-wrapper">
        <div class="row invoice-preview">
            <!-- Invoice -->
            <div class="col-xl-9 col-md-8 col-12">
                <div class="card invoice-preview-card">
                    <div class="card-body invoice-padding pb-0">
                        <!-- Header starts -->
                        <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                            <div>
                                <div class="logo-wrapper">
                                    <h3 class="text-primary invoice-logo">
                                        {{env('APP_NAME')}}
                                    </h3>
                                </div>
                                <p class="card-text mb-25">Full Name : {{$model->full_name}}</p>
                                <p class="card-text mb-25">National Number :{{$model->national_number}}</p>
                                <p class="card-text mb-0">Address Number : {{$model->address}}</p>
                            </div>
                            <div class="mt-md-0 mt-2">
                                <h4 class="invoice-title">
                                    Donor
                                    <span class="invoice-number"> #{{$model->id}}</span>
                                </h4>
                                <div class="invoice-date-wrapper">
                                    <p class="invoice-date-title">blood Type :</p>
                                    <p class="invoice-date">{{$model->blood_type}}</p>
                                </div>
                                <div class="invoice-date-wrapper">
                                    <p class="invoice-date-title">organ Name :</p>
                                    <p class="invoice-date">{{$model->organ->organ_name}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Header ends -->
                    </div>

                    <hr class="invoice-spacing" />

                    <!-- Address and Contact starts -->
                    <div class="card-body invoice-padding pt-0">
                        <div class="row invoice-spacing">
                           @if($model->description)
                                <p> Details If Exists :
                                    {{$model->description}}
                                </p>
                            @endif
                        </div>
                    </div>
                    <!-- Address and Contact ends -->

                    <hr class="invoice-spacing" />


                </div>
            </div>
            <!-- /Invoice -->

        </div>
    </section>


@endsection
