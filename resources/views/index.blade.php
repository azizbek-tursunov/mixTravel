<x-layout>
    <!--====== Start Breadcrumb Section ======-->
    <section class="page-banner light-red-bg pt-170 pb-170 bg_cover"
             style="background-image: url(assets/images/bg/page-bg-1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="page-banner-content text-center text-white">
                        <h1 class="page-title">Blog Standard</h1>
                        <ul class="breadcrumb-link text-white">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Blog Standard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Breadcrumb Section ======-->
    <!--====== Start Breadcrumb Section ======-->
    <section class="blog-standard-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-standard-wrapper mb-30">
                        @if(isset($tours))
                            @foreach($tours as $tour)
                                <div class="blog-standard-post-item mb-50 wow fadeInUp">
                                    <div class="post-thumbnail">
                                        <img src="/storage/{{ $tour->image }}" alt="Post Image">
                                    </div>
                                    <div class="entry-content">
                                        <div class="post-meta">
                                            <ul>
                                                <li><span><a href="#"><i
                                                                class="far fa-calendar-alt"></i> November 23,2022</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title"><a
                                                href="{{ route('showTour', ['tour' => $tour->id]) }}">{{ $tour->direction }}</a>
                                        </h3>
                                        <a href="{{ route('showTour', ['tour' => $tour->id]) }}" class="btn-link">ko'proq
                                            malumot olish<i class="far fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        @elseif(isset($hotels))
                            @foreach($hotels as $hotel)
                                <div class="blog-standard-post-item mb-50 wow fadeInUp">
                                    <div class="post-thumbnail">
                                        <img src="/storage/{{ $hotel->image }}" alt="Post Image">
                                    </div>
                                    <div class="entry-content">
                                        <div class="post-meta">
                                            <ul>
                                                <li><span><a href="#"><i
                                                                class="far fa-calendar-alt"></i> November 23,2022</a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <h3 class="title"><a
                                                href="{{ route('showHotel', ['hotel' => $hotel->id]) }}">{{ $hotel->name }}</a>
                                        </h3>
                                        <a href="{{ route('showHotel', ['hotel' => $hotel->id]) }}" class="btn-link">ko'proq
                                            malumot olish<i class="far fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        @endif


                        <div class="vedhak-pagination mt-30 wow fadeInUp">
                            <ul>
                                <li><a href="#" class="prev-btn"><i class="far fa-arrow-left"></i></a></li>
                                <li><a href="#"><span></span></a></li>
                                <li><a href="#"><span></span></a></li>
                                <li><a href="#"><span></span></a></li>
                                <li><a href="#"><span></span></a></li>
                                <li><a href="#"><span></span></a></li>
                                <li><a href="#" class="next-btn"><i class="far fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar-widget-area pl-lg-40">
                        <!--=== Search Widget ===-->
                        <div class="sidebar-widget search-widget mb-30 wow fadeInUp">
                            <h5 class="widget-title">Search</h5>
                            <form>
                                <div class="form_group">
                                    <label><i class="far fa-search"></i></label>
                                    <input type="text" class="form_control" placeholder="Search" name="search" required>
                                </div>
                            </form>
                        </div>
                        @if(isset($destinations))
                            <!--=== Category Widget ===-->
                            <div class="sidebar-widget category-widget mb-30 wow fadeInUp">
                                <h5 class="widget-title">{{ __('home.destination') }}</h5>
                                <ul class="category-nav">

                                    @foreach($destinations as $destination)
                                        <li>
                                            <a href="{{ route('showByDestination', ['destination' => $destination->id]) }}  ">{{ $destination->name }}
                                                <i class="far fa-arrow-right"></i></a></li>
                                    @endforeach

                                </ul>
                            </div>
                        @endif

                        <!--=== Recent Post Widget ===-->
                        <div class="sidebar-widget recent-post-widget mb-40 wow fadeInUp">
                            <h5 class="widget-title">Recent News</h5>
                            <ul class="recent-post-list">
                                <li class="post-thumbnail-content">
                                    <img src="assets/images/blog/post-thumb-1.jpg" alt="post thumb">
                                    <div class="post-title-date">
                                        <h5><a href="blog-details.html">Web Quality Assurance
                                                Requirements To Web
                                                Dev Risk Manage</a></h5>
                                        <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">Sep 18, 20222</a></span>
                                    </div>
                                </li>
                                <li class="post-thumbnail-content">
                                    <img src="assets/images/blog/post-thumb-2.jpg" alt="post thumb">
                                    <div class="post-title-date">
                                        <h5><a href="blog-details.html">Deep Dive Into Wonder
                                                World Of Displaements
                                                Filtering</a></h5>
                                        <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">Sep 18, 2022</a></span>
                                    </div>
                                </li>
                                <li class="post-thumbnail-content">
                                    <img src="assets/images/blog/post-thumb-3.jpg" alt="post thumb">
                                    <div class="post-title-date">
                                        <h5><a href="blog-details.html">Handling Mountin And mountin Of Navigation
                                                Routes In Native</a></h5>
                                        <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">Sep 18, 2022</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--=== Banner Widget ===-->
                        <div class="sidebar-banner-widget wow fadeInUp mb-40">
                            <div class="banner-widget-content">
                                <div class="banner-img">
                                    <img src="assets/images/blog/banner-1.jpg" alt="Post Banner">
                                    <div class="hover-overlay">
                                        <div class="hover-content">
                                            <h4 class="title"><a href="#">Luxury Cauple
                                                    Cabin</a></h4>
                                            <span class="price"><span class="currency">$</span>193</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Tag Widget ===-->
                        <div class="sidebar-widget tag-cloud-widget mb-40 wow fadeInUp">
                            <h5 class="widget-title">Products Tags</h5>
                            <a href="#">Camping</a>
                            <a href="#">Tent Camp</a>
                            <a href="#">Wild</a>
                            <a href="#">Campfire</a>
                            <a href="#">Luxury Cabin</a>
                            <a href="#">Safari Tent</a>
                            <a href="#">House Tree</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Breadcrumb Section ======-->
</x-layout>
