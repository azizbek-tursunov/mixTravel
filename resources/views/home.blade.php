<x-layout>
    <!--====== Start Banner Section ======-->
    <section class="banner-section">
        <div class="hero-wrapper-two">
            <div class="hero-slider-two">
                @foreach($banners as $banner)
                    <div class="single-slider">
                        <div class="image-layer bg_cover"
                             style="background-image: url('/storage/{{ $banner->image }}');"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-lg-10">
                                    <div class="hero-content text-white text-center">
                                        {{--  <span class="sub-title">Travel Camping and</span>--}}
                                        <h1>{{ $banner->title }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section><!--====== End Banner Section ======-->

    <!--====== Start About Section ======-->
    <section class="about-section pt-100 pb-45">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-12">
                    <div class="about-content-box mb-50">
                        <div class="section-title mb-20">
                            <h2>{!! $about->title !!}</h2>
                        </div>
                        <p class="mb-40">{!! $about->description !!}</p>
                        <div class="experience-box d-flex">
                            <div class="icon">
                                <img src="assets/images/line2.png" alt="Shape">
                            </div>
                            <div class="big-text">
                                <h2 class="number">25 <span class="symbol">+</span></h2>
                            </div>
                            <div class="text">
                                <h6>Years Of
                                    Experience</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="about-one_image-box mb-20 p-r z-1">
                        <img src="/storage/{{ $about->image_first }}" alt="About Image">
                        <img src="/storage/{{ $about->image_second }}" class="about-img-two mb-30" alt="About Image">
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End About Section ======-->
    <!--====== Start Service Section ======-->
    <section class="service-section pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="section-title text-center mb-50">
                        <h2>{{ __('home.withUs') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                @foreach($destinations as $destination)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-service-item-two mb-40">
                            <div class="img-holder">
                                <img src="/storage/{{ $destination->image }}" alt="Service Image">
                                <div class="hover-overlay"></div>
                                <div class="hover-content">
                                    <a href="{{ route('showByDestination', ['destination' => $destination->id]) }}" class="icon-btn"><i
                                            class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="text pt-35">
                                <h4 class="title"><a href="{{ route('showByDestination', ['destination' => $destination->id]) }}">{{ $destination->name }}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section><!--====== End Service Section ======-->
    <!--====== Start Video Section ======-->
    <section class="video-bg-section pt-140 pb-110 p-r z-1 bg_cover"
             style="background-image: url(assets/images/video/video-1.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="video-content-box text-white text-md-center mb-40">
                        <h2 class="mb-30">
                            Sayohatingizni biz bilan boshlashga tayyormisiz
                        </h2>
                        <a href="#" class="main-btn btn-green">Tomosha qilish<i
                                class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="play-box text-lg-end text-md-center mb-40">
                        <a href="https://www.youtube.com/watch?v=ibuUmMhD2Pg" class="video-popup"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Video Section ======-->
    <!--====== Start Features Section ======-->
    <section class="features-section pt-100 pb-35">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="fancy-icon-box-two mb-55">
                        <div class="icon-title d-flex">
                            <div class="icon">
                                <i class="flaticon-hiking-1"></i>
                            </div>
                            <div class="title">
                                <h6 class="title">
                                    O'z sayohatingizni
                                    Rejalashtiring!
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="fancy-icon-box-two mb-55">
                        <div class="icon-title d-flex">
                            <div class="icon">
                                <i class="flaticon-eco-house"></i>
                            </div>
                            <div class="title">
                                <h6 class="title">
                                    Milliy Bank
                                    Vakolati.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="fancy-icon-box-two mb-55">
                        <div class="icon-title d-flex">
                            <div class="icon">
                                <i class="flaticon-washing-machine"></i>
                            </div>
                            <div class="title">
                                <h5 class="title">
                                    Professional
                                    Jamoa.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Features Section ======-->
    <!--====== Start Accommodation Section ======-->
    <section class="accommodation-section pb-100">
        <div class="container-fluid">
            <div class="service-slider-one">

                @foreach($tours as $tour)
                    <div class="single-service-item-four">
                        <div class="img-holder">
                            <img src="/storage/{{ $tour->image }}" alt="Service Image">
                            <div class="hover-content">
                                <div class="inner-content d-flex justify-content-between">
                                    <div class="text">
                                            <h4 class="title"><a href="{{ route('showTour', ['tour' => $tour->id]) }}">{{ $tour->name }}</a></h4>
                                        <a href="{{ route('showTour', ['tour' => $tour->id]) }}" class="btn-link">{{ $tour->direction }}<i
                                                class="far fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="icon">
                                        <a href="{{ route('showTour', ['tour' => $tour->id]) }}" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section><!--====== End Accommodation Section ======-->
    <!--====== Start CTa Section ======-->
    <section class="cta-section dark-green-bg pt-70 pb-35">
        <div class="container">
            <div class="cta-wrapper bg_cover" style="background-image: url(assets/images/bg/cta-bg-1.png);">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="section-title text-white mb-40">
                            <h2>
                                Bizning xizmatimiz yoqdimi? Bizga obuna bo'ling.
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="cta-button float-lg-end mb-35">
                            <a href="about.html" class="main-btn btn-yellow">Obuna bo'lish<i
                                    class="far fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End CTa Section ======-->
</x-layout>
