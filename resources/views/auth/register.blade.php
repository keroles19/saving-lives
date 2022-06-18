
{{--<!-- Validation Errors -->--}}
{{--<x-auth-validation-errors class="mb-4" :errors="$errors" />--}}
{{--<form method="POST" action="{{ route('register') }}">--}}
{{--    @csrf--}}

{{--    <!-- Name -->--}}
{{--    <div>--}}
{{--        <x-label for="name" :value="__('Name')" />--}}

{{--        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--    </div>--}}

{{--    <!-- Email Address -->--}}
{{--    <div class="mt-4">--}}
{{--        <x-label for="email" :value="__('Email')" />--}}

{{--        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--    </div>--}}

{{--    <!-- Password -->--}}
{{--    <div class="mt-4">--}}
{{--        <x-label for="password" :value="__('Password')" />--}}

{{--        <x-input id="password" class="block mt-1 w-full"--}}
{{--                 type="password"--}}
{{--                 name="password"--}}
{{--                 required autocomplete="new-password" />--}}
{{--    </div>--}}

{{--    <!-- Confirm Password -->--}}
{{--    <div class="mt-4">--}}
{{--        <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--        <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                 type="password"--}}
{{--                 name="password_confirmation" required />--}}
{{--    </div>--}}

{{--    <div class="flex items-center justify-end mt-4">--}}
{{--        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--            {{ __('Already registered?') }}--}}
{{--        </a>--}}

{{--        <x-button class="ml-4">--}}
{{--            {{ __('Register') }}--}}
{{--        </x-button>--}}
{{--    </div>--}}
{{--</form>--}}


@include('auth.layouts.header')


<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern
 navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">



<!-- BEGIN: Content-->
<div class="app-content mt-4">
    <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
            <!-- Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Join us and help save someone's life</h4>
                            </div>
                            <div class="card-body">


                                @include('auth.layouts.partials')
                                <form class="form" method="post" action="{{url('register')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">Full Name </label>
                                                <input value="{{old('full_name')}}" type="text" id="full-name-column" required class="form-control" placeholder="Full Name " name="full_name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="national-number-column">National Number</label>
                                                <input value="{{old('national_number')}}" type="number" id="last-name-column" required class="form-control" placeholder="National Number" name="national_number" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="phone-column">Phone</label>
                                                <input value="{{old('phone')}}" type="number" id="phone-column" required class="form-control" placeholder="phone Number" name="phone" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="email-column">Email</label>
                                                <input value="{{old('email')}}" type="email" required id="email-column" class="form-control" name="email" placeholder="Email" />
                                            </div>
                                        </div>
                                        @php $blood_type = ['A','A+','B+','B-','AB+','AB-','O+','O-']; @endphp
                                        <div class="col-md-6 col-12">
                                            <label class="form-label" for="email-id-column">Blood Type</label>
                                                <div class="mb-2 mt-1">
                                                    @foreach($blood_type as $key =>$type)
                                                    <div class="form-check form-check-inline">
                                                        <input  class="form-check-input" type="radio" name="blood_type" id="inlineRadio_{{$key}}" value="{{$type}}"  />
                                                        <label class="form-check-label" for="inlineRadio_{{$key}}">{{$type}}</label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="email-id-column">Address</label>
                                                <input value="{{old('address')}}" type="text" id="address-column" class="form-control" name="address" placeholder="Address" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="email-id-column"> Additional Description</label>
                                                <textarea  class="form-control" cols="4" rows="4" name="description"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="select2-basic">Organ</label>
                                                <select class="select2 form-select" name="organ_id" id="select2-basic">
                                                    <option selected disabled>choose Organ</option>
                                                    @foreach($organ as $org)
                                                    <option value="{{$org->id}}">{{$org->organ_name}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-12 col-12">
                                            <label class="form-label" for="email-id-column">Join As </label>
                                            <div class="mb-2 mt-1">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="guard" id="inlineRadio20" value="donor" checked />
                                                    <label class="form-check-label" for="inlineRadio20">Donor</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="guard" id="inlineRadio21" value="receiver" />
                                                    <label class="form-check-label" for="inlineRadio21">Receiver</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <a typeof="button" href="{{route('article')}}"  class="btn btn-outline-success">BACk</a>
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Floating Label Form section end -->

        </div>
    </div>
</div>
<!-- END: Content-->



@include('auth.layouts.footer')

