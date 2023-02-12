<div
    class="l-primary-header--responsive-wrapper l-primary-header--absolute l-primary-header--sticky l-primary-header--autohide">
    <header class="l-primary-header l-primary-header--responsive">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="a-logo a-logo--image">
                    <a href="{{route('indexf')}}" style="width: 130px;;height: 77px">
                        <img width="405" height="238" src="{{url('aminAsset/image/logo/',$general->logo)}}"
                            class="a-logo--image__inner a-logo--image__inner--dark" alt="Cliping-Path-Service-Logo"
                            decoding="async" data-lazy-srcset="{{url('aminAsset/image/logo/',$general->logo)}}"
                            data-lazy-sizes="(max-width: 405px) 100vw, 405px"
                            data-lazy-src="{{url('aminAsset/image/logo/',$general->logo)}}" /><noscript><img width="405"
                                height="238" src="{{url('aminAsset/image/logo/',$general->logo)}}"
                                class="a-logo--image__inner a-logo--image__inner--dark" alt="Cliping-Path-Service-Logo"
                                decoding="async" srcset="{{url('aminAsset/image/logo/',$general->logo)}}"
                                sizes="(max-width: 405px) 100vw, 405px" /></noscript><img width="405" height="238"
                            src="{{url('aminAsset/image/logo/',$general->logo)}}"
                            class="a-logo--image__inner a-logo--image__inner--light" alt="Cliping-Path-Service-Logo"
                            decoding="async" data-lazy-srcset="{{url('aminAsset/image/logo/',$general->logo)}}"
                            data-lazy-sizes="(max-width: 405px) 100vw, 405px"
                            data-lazy-src="{{url('aminAsset/image/logo/',$general->logo)}}" /><noscript><img width="405"
                                height="238" src="{{url('aminAsset/image/logo/',$general->logo)}}"
                                class="a-logo--image__inner a-logo--image__inner--light" alt="Cliping-Path-Service-Logo"
                                decoding="async" srcset="{{url('aminAsset/image/logo/',$general->logo)}}"
                                sizes="(max-width: 405px) 100vw, 405px" /></noscript> </a>
                </div>
                <div class="ml-auto d-flex align-items-center">
                    <div class="l-primary-header__icons d-flex align-items-center">
                        <a class="a-site-search-icon d-none d-lg-flex" href="#">
                            <svg width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </a>
                        <div class="a-slidingbar-icon d-none d-lg-flex">
                            <a href="#">
                                <svg  width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-align-right">
                                    <line x1="21" y1="10" x2="7" y2="10"></line>
                                    <line x1="21" y1="6" x2="3" y2="6"></line>
                                    <line x1="21" y1="14" x2="3" y2="14"></line>
                                    <line x1="21" y1="18" x2="7" y2="18"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <a href="#" class="l-primary-header--responsive__icon" id="l-primary-header--responsive__icon">
                        <svg style="enable-background:new 0 0 139 139;" version="1.1" viewBox="0 0 139 139"
                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <line class="st0" x1="26.5" x2="112.5" y1="46.3" y2="46.3" />
                            <line class="st0" id="XMLID_9_" x1="26.5" x2="112.5" y1="92.7" y2="92.7" />
                            <line class="st0" id="XMLID_8_" x1="26.5" x2="112.5" y1="69.5" y2="69.5" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="l-primary-header--responsive__nav">
                <nav class="menu-main-menu-container">
                    <ul id="menu-main-menu" class="menu">
                        <li id="menu-item-7181"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7137 current_page_item menu-item-7181">
                            <a href="{{ route('indexf') }}" aria-current="page">Home</a>
                        </li>
                        <li id="menu-item-10883"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10883"><a
                                href="{{ route('about_us') }}">About Us</a></li>
                        <li id="menu-item-10603"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-10603">
                            <a href="{{route('service')}}">Services</a>
                            <ul class="sub-menu">
                                @foreach ($s as $k=>$v)
                                
                                <li id="menu-item-11406"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11406">
                                <a href="{{route('serviceDetails',$v->service->id)}}">{{$v->service->title}}</a>
                               </li>
                               
                                
                                @endforeach


                            </ul>
                        </li>
                        <li id="menu-item-10602"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10602"><a
                                href="{{ route('workPortfolio') }}">Our Portfolio</a></li>
                        <li id="menu-item-11370"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11370"><a
                                href="{{route('pricings')}}">Pricing</a></li>
                        <li id="menu-item-10787"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10787"><a
                                href="{{route('contact')}}">Contact Us</a></li>
                        <li id="menu-item-12045"
                            class="free-trial menu-item menu-item-type-custom menu-item-object-custom menu-item-12045">
                            <a href="{{route('freeTrial')}}">FREE TRIAL</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>

<div
    class="l-primary-header--default-wrapper l-primary-header--absolute l-primary-header--sticky l-primary-header--autohide">
    <header class="l-primary-header l-primary-header--default">
        <div class="container">
            <div class="d-flex align-items-stretch l-primary-header__holder">
                <div class="a-logo a-logo--image">
                    <a href="{{route('indexf')}}" style="width: 130px;;height: 77px">
                        <img width="405" height="238" src="{{url('aminAsset/image/logo/',$general->logo)}}"
                            class="a-logo--image__inner a-logo--image__inner--dark" alt="Cliping-Path-Service-Logo"
                            decoding="async" data-lazy-srcset="{{url('aminAsset/image/logo/',$general->logo)}}"
                            data-lazy-sizes="(max-width: 405px) 100vw, 405px"
                            data-lazy-src="{{url('aminAsset/image/logo/',$general->logo)}}" /><noscript><img width="405"
                                height="238" src="{{url('aminAsset/image/logo/',$general->logo)}}"
                                class="a-logo--image__inner a-logo--image__inner--dark" alt="Cliping-Path-Service-Logo"
                                decoding="async" srcset="{{url('aminAsset/image/logo/',$general->logo)}}"
                                sizes="(max-width: 405px) 100vw, 405px" /></noscript><img width="405" height="238"
                            src="{{url('aminAsset/image/logo/',$general->logo)}}"
                            class="a-logo--image__inner a-logo--image__inner--light" alt="Cliping-Path-Service-Logo"
                            decoding="async" data-lazy-srcset="{{url('aminAsset/image/logo/',$general->logo)}}"
                            data-lazy-sizes="(max-width: 405px) 100vw, 405px"
                            data-lazy-src="{{url('aminAsset/image/logo/',$general->logo)}}" /><noscript><img width="405"
                                height="238" src="{{url('aminAsset/image/logo/',$general->logo)}}"
                                class="a-logo--image__inner a-logo--image__inner--light" alt="Cliping-Path-Service-Logo"
                                decoding="async" srcset="{{url('aminAsset/image/logo/',$general->logo)}}"
                                sizes="(max-width: 405px) 100vw, 405px" /></noscript> </a>
                </div>
                <div class="ml-auto d-flex align-items-stretch">
                    <div class="d-flex align-items-stretch">
                        <div class="l-primary-header--default__nav d-flex aling-items-stretch">
                            <nav class="d-flex aling-items-stretch">
                                <ul id="menu-main-menu-1" class="menu m-header-default-menu d-flex aling-items-stretch">
                                    <li
                                        class= " {{url()->current() == route('indexf') ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7137 current_page_item menu-item-7181' : 'menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7137  menu-item-7181'}}">
                                        <a href="{{ route('indexf') }}" aria-current="page">Home</a>
                                    </li>
                                    <li
                                        class="{{url()->current() == route('about_us') ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-10883 current_page_item' : 'menu-item menu-item-type-post_type menu-item-object-page menu-item-10883'}} ">
                                        <a href="{{ route('about_us') }}">About Us</a>
                                    </li>
                                    <li
                                        class="{{url()->current() == route('service') ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-10603 current_page_item' : 'menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-10603'}} ">
                                        <a href="{{route('service')}}">Services</a>
                                        <ul class="sub-menu">
                                            @foreach ($s as $k=>$v)
                                                @if ($k<7)
                                                <li id="menu-item-11406"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11406">
                                                <a href="{{route('serviceDetails',$v->service->id)}}">{{$v->service->title}}</a>
                                            </li>
                                                @endif
                                            
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li
                                        class="{{url()->current() == route('workPortfolio') ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-10602 current_page_item' : 'menu-item menu-item-type-post_type menu-item-object-page menu-item-10602'}}">
                                        <a href="{{ route('workPortfolio') }}">Our Portfolio</a>
                                    </li>
                                    <li
                                        class="{{url()->current() == route('pricings') ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-11370 current_page_item' : 'menu-item menu-item-type-post_type menu-item-object-page menu-item-11370'}}">
                                        <a href="{{route('pricings')}}">Pricing</a>
                                    </li>
                                    <li
                                        class="{{url()->current() == route('contact') ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-10787 current_page_item' : 'menu-item menu-item-type-post_type menu-item-object-page menu-item-10787'}}">
                                        <a href="{{route('contact')}}">Contact Us</a>
                                    </li>
                                    <li
                                        class="free-trial menu-item menu-item-type-custom menu-item-object-custom menu-item-12045">
                                        <a href="{{route('freeTrial')}}">FREE TRIAL</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="l-primary-header__icons d-flex align-items-stretch">
                            <a class="a-site-search-icon d-none d-lg-flex" href="#">
                                <svg width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </a>
                            <div class="a-slidingbar-icon d-none d-lg-flex">
                                <a href="#">
                                    <svg  width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-align-right">
                                        <line x1="21" y1="10" x2="7" y2="10"></line>
                                        <line x1="21" y1="6" x2="3" y2="6"></line>
                                        <line x1="21" y1="14" x2="3" y2="14"></line>
                                        <line x1="21" y1="18" x2="7" y2="18"></line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>