<x-layout>
    <!--====== Start Breadcrumb Section ======-->
    <section class="page-banner light-red-bg pt-170 pb-170 bg_cover"
             style="background-image: url(/storage/{{ $tour->image }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="page-banner-content text-center text-white">
                        <h1 class="page-title">{{ $tour->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Breadcrumb Section ======-->
    <!--====== Start Blog Details Section ======-->
    <section class="blog-details-section pt-100 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details-wrapper">
                        <div class="blog-post mb-60 wow fadeInUp">
{{--                            <div class="post-meta">--}}
{{--                                <ul>--}}
{{--                                    <li><span><a href="#"><i class="far fa-calendar-alt"></i> November 23,2022</a></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                            <div class="main-post">
                                <div class="entry-content">
                                        {!! $tour->description !!}
                                </div>
                            </div>
                        </div>
                        <!--===  Post Navigation  ===-->
                        <div class="post-navigation-item pb-30 mb-55 wow fadeInUp">
                            <div class="prev-post post-nav-item d-flex mb-30">
                                <div class="thumb">
                                    <img src="/assets/images/blog/prev-post.jpg" alt="Post Thumb">
                                </div>
                                <div class="content">
                                    <h6><a href="blog-details.html">Web Quality Assurance
                                            Requirements To Web
                                            Dev Risk Manage</a></h6>
                                    <span class="post-date"><a href="#"><i class="far fa-calendar-alt"></i>November 23,2022</a></span>
                                </div>
                            </div>
                            <div class="next-post post-nav-item d-flex mb-30">
                                <div class="thumb">
                                    <img src="/assets/images/blog/next-post.jpg" alt="Post Thumb">
                                </div>
                                <div class="content">
                                    <h6><a href="blog-details.html">Deep Dive Into Wonder
                                            World Of Displaements
                                            Filtering</a></h6>
                                    <span class="post-date"><a href="#"><i class="far fa-calendar-alt"></i>November 23,2022</a></span>
                                </div>
                            </div>
                        </div>
                        <!--===  Comments Form  ===-->
                        <div class="comments-respond mb-35 wow fadeInUp" id="comment-respond">
                            <h5 class="comments-heading">Leave a Comments</h5>
                            <p>Send us your valuable feedback about our services</p>
                            <form class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Name *" name="name"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email *" name="email"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea name="message" class="form_control"
                                                      placeholder="Comments"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <button class="main-btn btn-green">Send comments<i
                                                    class="far fa-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar-widget-area pl-lg-40">
                        <!--=== Category Widget ===-->
                        <div class="sidebar-widget category-widget mb-30 wow fadeInUp">
                            <h5 class="widget-title">{{ __('home.package') }}</h5>
                            <ul class="category-nav">

                                @foreach($destinations as $destination)
                                <li><a href="#">{{ $destination->name }}<i class="far fa-arrow-right"></i></a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Blog Details Section ======-->
</x-layout>
