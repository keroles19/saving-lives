@extends('hospital.layouts.layouts')



@section('content')

    <!-- Bordered table start -->
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Donors
                        <small> {{$model->total()}} </small>
                    </h4>
                </div>
                <div class="card-body">
                   <div class="row">
                       <div class="col-xl-6 col-md-8">
                          <form method="get" action="{{route('hospital.donor')}}">
                              <div class="input-group">
                                  <button class="btn btn-outline-primary disabled" type="button">
                                      <i data-feather="search"></i>
                                  </button>
                                  <input value="{{request()->search}}" name="search" type="text" class="form-control" placeholder="Type Here"  aria-label="Amount" />
                                  <button class="btn btn-outline-primary" type="submit">Search !</button>
                              </div>
                          </form>
                       </div>
                   </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>National Number</th>
                            <th>Blood Type</th>
                            <th>Organ</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>SHOW</th>
                        </tr>
                        </thead>
                        <tbody>
                           @if($model->count() > 0)
                             @foreach($model as $item)
                                 <tr>
                                     <td>{{$item->full_name}}</td>
                                     <td>{{$item->national_number}}</td>
                                     <td>{{$item->blood_type}}</td>
                                     <td>{{$item->organ->organ_name}}</td>
                                     <td>{{$item->address}}</td>
                                     <td>{{$item->phone}}</td>
                                     <td>{{$item->email}}</td>
                                     <td>
                                         <a class="btn btn-success btn-sm"
                                            href="{{route('hospital.donor.show',['id'=>$item->id])}}">
                                             <i data-feather='eye'></i>
                                         </a>
                                     </td>
                                 </tr>
                             @endforeach
                           @else
                               <tr>
                                  <td class="py-2" colspan="8">
                                      <p class="text-center"> No Found Record</p>
                                  </td>
                               </tr>
                           @endif
                        </tbody>
                    </table>

                </div>
               <div class="m-1">
                   {{$model->appends(request()->query())->links()}}
               </div>
            </div>
        </div>
    </div>
    <!-- Bordered table end -->


@endsection
