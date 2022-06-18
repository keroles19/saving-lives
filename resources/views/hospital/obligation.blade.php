@extends('hospital.layouts.layouts')



@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Check Obligation
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-md-8">
                            @include('auth.layouts.partials')
                            <form method="get" action="{{route('hospital.obligation')}}">
                                @csrf
                                <div class="input-group">
                                    <button class="btn btn-outline-primary disabled" type="button">
                                        <i data-feather="search"></i>
                                    </button>
                                    <input value="{{request()->search}}" name="search" type="text" class="form-control" placeholder="Type Here"  aria-label="Amount" />
                                    <button class="btn btn-outline-primary" type="submit">Check !</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    @if(request()->search && strlen(request()->search) == 14)
                        @if($model->count() > 0)
                     <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>National Number</th>
                            <th>ٌReal State Document Number</th>
                            <th>Accepted</th>
                        </tr>
                        </thead>
                        <tbody>

                                @foreach($model as $item)
                                    <tr>
                                        <td>{{$item->full_name}}</td>
                                        <td>{{$item->national_number}}</td>
                                        <td>{{$item->number}}</td>
                                        <td>
                                           <p class="text-success">
                                               <i data-feather='check-circle'></i>
                                           </p>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                        @else
                            <div class="alert alert-danger py-4 text-center">
                                This person has not an obligation
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Bordered table end -->


@endsection
