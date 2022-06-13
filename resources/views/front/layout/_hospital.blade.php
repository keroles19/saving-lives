<!-- Our Hospital -->
<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Hospitals</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach($hospitals as $hospital)
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img src="{{asset('/storage/'.$hospital->photo)}}" alt="Hospital photo">
                            <div class="meta">
                                <a href="tel:{{$hospital->phone}}"><span class="mai-call"></span></a>
                                <a href="https://wa.me/{{$hospital->whatsapp}}" target="_blank"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">{{$hospital->name}}</p>
                            <span class="text-sm text-grey">{{$hospital->country->country_name}}</span>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</div>
