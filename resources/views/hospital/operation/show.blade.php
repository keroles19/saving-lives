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
                                <p class="card-text mb-25">Hospital : {{$model->hospital->name}}</p>
                                <p class="card-text mb-25">Hospital Email :{{$model->hospital->email}}</p>
                                <p class="card-text mb-0">Hospital Phone  : {{$model->hospital->phone}}</p>
                            </div>
                            <div class="mt-md-0 mt-2">
                                <h4 class="invoice-title">
                                    Operation
                                    <span class="invoice-number"> #{{$model->id}}</span>
                                </h4>
                                <div class="invoice-date-wrapper">
                                    <p class="invoice-date-title">Date  :</p>
                                    <p class="invoice-date">{{$model->updated_at}}</p>
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
                            <div class="col-xl-8 p-0">
                                <h6 class="mb-2">Donor Info:</h6>
                                <h6 class="mb-25">{{$model->donor->full_name}}</h6>
                                <p class="card-text mb-25">{{$model->donor->phone}}</p>
                                <p class="card-text mb-25">{{$model->donor->address}}</p>
                                <p class="card-text mb-25">{{$model->donor->national_number}}</p>
                                <p class="card-text mb-0">{{$model->donor->email}}</p>
                            </div>
                            <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                <h6 class="mb-2">Receiver  Info :</h6>
                                <h6 class="mb-25">{{$model->full_name}}</h6>
                                <p class="card-text mb-25">{{$model->phone}}</p>
                                <p class="card-text mb-25">{{$model->address}}</p>
                                <p class="card-text mb-25">{{$model->national_number}}</p>
                                <p class="card-text mb-0">{{$model->email}}</p>
                            </div>
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
