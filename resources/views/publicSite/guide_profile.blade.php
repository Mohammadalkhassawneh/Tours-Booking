@extends("publicSite.layout.master")
@section("content")
        <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-contact.jpg);">
            <div class="container">
                <h2>Guide Profile</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Guide Profile</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <!-- Sahar Start -->
        <section class="profile_info">
            <div class="container">
                <div class="row">
                    <!-- Guide Information -->
                    <div class="col-4 guide-info">
                        <img src="{{asset('user_images/'.'guide.jpg')}}" alt="guide_photo" width="300px" class="guide_img">
                        <h2>{{$user->name}}</h2>
                        <div class="container">
                            <div class="row">
                                <div class="col-2 icons">
                                    <h4><i class="fas fa-envelope"></i></h4>
                                    <h4><i class="fas fa-mobile-alt"></i></h4>

                                </div>
                                <div class="col-10">
                                    <h4>{{$user->email}}</h4>
                                    <h4>{{$user->phone}}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="buttons-list">
                            <div class="row">
                                <div class="col-5">
                                </div>
                                <div class="col-7">
                                    <a href="">Add Trip</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Guide Trips -->
                    <div class="col-8 guide-trips">
                        <h2 class="mb-5">Guide Trips</h2>
                        <!-- Trips -->
                        <div class="trip">
                            <div class="container">
                                <!-- Trip Information -->
                                @foreach($trips as $trip)
                                <div class="row">
                                    <div class="col-5">
                                        <img src="{{asset('uploads/'.'salt.jpg')}}" alt="guide_photo" class="trip_img">
                                    </div>
                                    <div class="col-7">
                                        <h4>{{$trip->name}}</h4>
                                        <p>{{$trip->description}}</p>
                                        <h6>{{$trip->price}} Jd</h6>
                                        <a href="" class="show-trip">Show Trip</a>
                                    </div>
                                </div>
                                <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sahar End -->
@endsection