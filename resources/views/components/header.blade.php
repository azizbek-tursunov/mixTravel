<!--====== Start Header ======-->
<header class="header-area transparent-header">
    <!--=== Header Navigation ===-->
    <div class="header-navigation navigation-two navigation-white">
        <div class="nav-overlay"></div>
        <div class="container-fluid">
            <!--=== Primary Menu ===-->
            <div class="primary-menu">
                <!--=== Site Branding ===-->
                <div class="site-branding">
                    <a href="index.html" class="brand-logo"><img src="/assets/images/logo/logo-white.png"
                                                                 alt="Site Logo"></a>
                </div>
                <!--=== Nav Inner Menu ===-->
                <div class="nav-menu">
                    <!--=== Mobile Logo ===-->
                    <div class="mobile-logo mb-30 d-block d-xl-none text-center">
                        <a href="index.html" class="brand-logo"><img src="assets/images/logo/logo-black.png"
                                                                     alt="Site Logo"></a>
                    </div>
                    <!--=== Main Menu ===-->
                    <nav class="main-menu">
                        <ul>
                            <li class="menu-item has-children"><a href="{{ route('home') }}">{{ __('home.home') }}</a>
                            </li>
                            <li class="menu-item has-children"><a href="#">{{ __('home.destination') }}</a>
                                <ul class="sub-menu">
                                    @foreach($destinations as $destination)
                                        <li>
                                            <a href="{{ route('showByDestination', ['destination' => $destination->id]) }}">{{ $destination->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a
                                    href="{{ route('tours') }}">{{ __('home.package') }}</a>
                            </li>
                            <li class="menu-item has-children"><a
                                    href="{{ route('aboutUs') }}">{{ __('home.aboutUs') }}</a>
                            </li>
                            <li class="menu-item"><a href="#">{{ __('home.hotel') }}</a></li>
                            {{--                            <li class="menu-item"><a class="search-btn" href="#" data-bs-toggle="modal"--}}
                            {{--                                                     data-bs-target="#search-modal"><i class="far fa-search"></i></a>--}}
                            {{--                            </li>--}}
                        </ul>
                    </nav>
                    <!--=== Nav Button ===-->
                </div>
                <!--=== Nav right Item ===-->
                <div class="nav-right-item d-flex align-items-center">
                    <div class="lang-dropdown">
                        <select class="wide form-control changeLang">
                            <option value="uz" {{ session()->get('locale') == 'uz' ? 'selected' : '' }}>O'zbekcha
                            </option>
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                            <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Русский</option>
                        </select>
                    </div>
                    <div class="navbar-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!--====== End Header ======-->
