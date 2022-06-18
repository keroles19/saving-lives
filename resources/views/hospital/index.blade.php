@extends('hospital.layouts.layouts')

@section('content')
    <!-- Dashboard Ecommerce Starts -->
    <section id="dashboard-ecommerce">
        <div class="row match-height">
            <!-- Medal Card -->
            <div class="col-xl-4 col-md-6 col-12">
                <div class="card card-congratulation-medal">
                    <div class="card-body">
                        <h5>Welcome Back  🎉 {{auth()->user()->name}}</h5>
                        <p class="card-text font-small-3">
                            There are Exists
                            <span class="text-primary">{{$obligation}}</span>
                            Obligation Here
                        </p>
                        <a type="button" href="{{route('hospital.obligation')}}" class="btn btn-primary">check Obligations</a>
                    </div>
                </div>
            </div>
            <!--/ Medal Card -->

            <!-- Statistics Card -->
            <div class="col-xl-8 col-md-6 col-12">
                <div class="card card-statistics">
                    <div class="card-header">
                        <h4 class="card-title">Statistics</h4>
                        <div class="d-flex align-items-center">
                            <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
                        </div>
                    </div>
                    <div class="card-body statistics-body">
                        <div class="row">
                            <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-primary me-2">
                                        <div class="avatar-content">
                                            <i data-feather="trending-up" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{$operation->count()}}</h4>
                                        <p class="card-text font-small-3 mb-0">Operations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-info me-2">
                                        <div class="avatar-content">
                                            <i data-feather="user" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{$donor}}</h4>
                                        <p class="card-text font-small-3 mb-0">Donors Avaible</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-danger me-2">
                                        <div class="avatar-content">
                                            <i data-feather="box" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{$receiver}}</h4>
                                        <p class="card-text font-small-3 mb-0">Receivers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics Card -->
        </div>

        <div class="row match-height">

            <!-- Revenue Report Card -->
            <div class=" col-12">
                <div class="card card-revenue-budget">
                    <div class="card-header">
                        <h4 class=" text-primary"> Your Operation
                            <small>"  {{$operation->count()}} " </small>
                        </h4>
                        <a class="btn btn-primary" href="{{route('hospital.show-operation')}}">
                            Make Operation
                        </a>
                    </div>
                    <div class="row mx-0">
                        <div class="table-responsive">
                            @if($operation->count() >0 )
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th>Donor Name</th>
                                        <th>Receiver Name</th>
                                        <th>Donor Number</th>
                                        <th>Receiver Number</th>
                                        <th>Operation Date</th>
                                        <th>Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($operation as $item)
                                        <tr>
                                            <td>{{$item->donor->full_name}}</td>
                                            <td>{{$item->full_name}}</td>
                                            <td>{{$item->donor->national_number}}</td>
                                            <td>{{$item->national_number}}</td>
                                            <td>{{$item->updated_at->diffForHumans()}}</td>
                                            <td>
                                                <a class="btn btn-success btn-sm" href="{{route('hospital.details-operation',['id'=>$item->id])}}">
                                                    <i data-feather='eye'></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            @else
                                <div class="alert alert-danger py-4 text-center">
                                    No Operation Yet
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Revenue Report Card -->
        </div>

    </section>
    <!-- Dashboard Ecommerce ends -->
@endsection

