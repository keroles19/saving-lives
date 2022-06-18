@extends('hospital.layouts.layouts')



@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Make Operation
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12 col-md-8">
                            @include('auth.layouts.partials')
                            <form class="needs-validation" method="post" action="{{route('hospital.make-operation')}}">
                                @csrf
                                <div class="row g-1">
                                    <div class="col-md-6 col-12 mb-1 position-relative">
                                        <label class="form-label" for="validationTooltip01">National Number For Donor</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="validationTooltip01"
                                            placeholder="National Number "
                                            required
                                            name="donor_id"
                                            value="{{old('donor_id')}}"
                                        />
                                    </div>
                                    <div class="col-md-6 col-12 mb-1 position-relative">
                                        <label class="form-label" for="validationTooltip01">National Number For Receiver</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="validationTooltip01"
                                            placeholder="National Number"
                                            required
                                            name="receiver_id"
                                            value="{{old('receiver_id')}}"
                                        />
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                            @csrf
                        </div>
                    </div>
                </div>

{{--                  @if(!isset($pending))--}}
{{--                    <div class="table-responsive">--}}
{{--                        @if(isset($donor))--}}
{{--                            <table class="table table-borderless">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Name</th>--}}
{{--                                    <th>National Number</th>--}}
{{--                                    <th>Blood Type</th>--}}
{{--                                    <th>Organ</th>--}}
{{--                                    <th>Address</th>--}}
{{--                                    <th>Phone</th>--}}
{{--                                    <th>Email</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach($donor as $item)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{$item->full_name}}</td>--}}
{{--                                        <td>{{$item->national_number}}</td>--}}
{{--                                        <td>{{$item->blood_type}}</td>--}}
{{--                                        <td>{{$item->organ->organ_name}}</td>--}}
{{--                                        <td>{{$item->address}}</td>--}}
{{--                                        <td>{{$item->phone}}</td>--}}
{{--                                        <td>{{$item->email}}</td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}


{{--                        @else--}}
{{--                            <div class="alert alert-danger py-4 text-center">--}}
{{--                                This person is Not Available--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                    <hr>--}}
{{--                    <div class="table-responsive">--}}
{{--                        @if(isset($receiver))--}}
{{--                            <table class="table table-borderless">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Name</th>--}}
{{--                                    <th>National Number</th>--}}
{{--                                    <th>Blood Type</th>--}}
{{--                                    <th>Organ</th>--}}
{{--                                    <th>Address</th>--}}
{{--                                    <th>Phone</th>--}}
{{--                                    <th>Email</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach($receiver as $item)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{$item->full_name}}</td>--}}
{{--                                        <td>{{$item->national_number}}</td>--}}
{{--                                        <td>{{$item->blood_type}}</td>--}}
{{--                                        <td>{{$item->organ->organ_name}}</td>--}}
{{--                                        <td>{{$item->address}}</td>--}}
{{--                                        <td>{{$item->phone}}</td>--}}
{{--                                        <td>{{$item->email}}</td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        @else--}}
{{--                            <div class="alert alert-danger py-4 text-center">--}}
{{--                                This person is Not Available--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                    </div>--}}
{{--                @endif--}}
            </div>
        </div>
    </div>
    <!-- Bordered table end -->


@endsection
