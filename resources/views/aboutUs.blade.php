<x-layout>
    <!--====== Start Breadcrumb Section ======-->
    <section class="page-banner light-red-bg pt-170 pb-170 bg_cover"
             style="background-image: url(/storage/{{ $about->banner_image }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="page-banner-content text-center text-white">
                        <h1 class="page-title">{{ $about->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Breadcrumb Section ======-->
    <!--====== Start Who-we Section ======-->
    <section class="who-we-bg-section p-r z-1 pt-100 pb-100 mt-30">
        <div class="who-bg bg_cover wow fadeInLeft" style="background-image: url(/storage/{{ $about->image }});"></div>
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-xl-8 col-lg-12">
                    <div class="who-we-wrapper wow fadeInDown">
                        <div class="row g-0 justify-content-center wow fadeInUp">
                            {!! $about->description !!}
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End Who-we Section ======-->
    </section><!--====== End Who-we Section ======-->
    <!--====== Start Team Section ======-->
    <section class="team-section pt-90 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-10">
                    <div class="section-title text-center mb-45 wow fadeInDown">
                        <span class="sub-title"><span class="number">03</span> Team Member</span>
                        <h2>Meet Our Professional <span class="thin">Team Member</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="single-team-item mb-40 wow fadeInUp">
                        <div class="member-img">
                            <img src="/assets/images/team/team-1.jpg" alt="Team Image">
                            <div class="hover-overlay"></div>
                            <div class="hover-content">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4 class="title">Michael F. Jimenez</h4>
                            <p class="position">CEO & Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="single-team-item mb-40 wow fadeInUp">
                        <div class="member-img">
                            <img src="/assets/images/team/team-2.jpg" alt="Team Image">
                            <div class="hover-overlay"></div>
                            <div class="hover-content">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4 class="title">Kenneth I. Phillips</h4>
                            <p class="position">Senior Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="single-team-item mb-40 wow fadeInUp">
                        <div class="member-img">
                            <img src="/assets/images/team/team-3.jpg" alt="Team Image">
                            <div class="hover-overlay"></div>
                            <div class="hover-content">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4 class="title">Alfonso J. Marrero</h4>
                            <p class="position">Junior Consultant</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="single-team-item mb-40 wow fadeInUp">
                        <div class="member-img">
                            <img src="/assets/images/team/team-4.jpg" alt="Team Image">
                            <div class="hover-overlay"></div>
                            <div class="hover-content">
                                <ul class="social-link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4 class="title">Jackie Y. Hickman</h4>
                            <p class="position">Business Consultant</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Team Section ======-->
    <!--====== Start Partners Section ======-->
    <section class="partners-section light-red-bg pb-80">
        <div class="container">
            <!--=== Partners Slider ===-->
            <div class="partner-slider-one pt-80 wow fadeInDown">

                @foreach($partners as $partner)
                    <div class="single-partner-item">
                        <div class="partner-img">
                            <a href="#"><img src="/storage/{{ $partner->image }}" alt="Partner Image"></a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section><!--====== End Partners Section ======-->
</x-layout>
