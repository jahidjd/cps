<div class="o-slidingbar__content">
    <div class="h-hide-scrollbar">
        <div class="h-hide-scrollbar__holder">
            <div class="o-slidingbar__content__holder">
                <div class="o-slidingbar__close-icon d-inline-flex">
                    <svg  width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </div>
                <div id="text-3" class="widget widget_text">
                    <div class="widgettitle-wrapper">
                        <h3 class="widgettitle">Quick Response</h3>
                    </div>
                    <div class="textwidget">
                        <p><strong>Email:</strong><br />
                            <a href="mailto:{{$general->email}}">{{$general->email}}</a><br />
                            <strong><br />
                                Hotline Support:<br />
                            </strong>Mobile<strong>:</strong>+88  {{$general->phone}}<strong><br />
                            </strong>
                        </p>
                    </div>
                </div>
                <div id="nav_menu-2" class="widget widget_nav_menu">
                    <div class="widgettitle-wrapper">
                        <h3 class="widgettitle">Quick Menu</h3>
                    </div>
                    <div class="menu-quick-menu-container">
                        <ul id="menu-quick-menu" class="menu">
                            <li id="menu-item-11036"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11036">
                                <a href="{{route('about_us')}}">About Us</a>
                            </li>
                            <li id="menu-item-11038"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11038">
                                <a href="{{route('service')}}">Services</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="o-slidingbar__overlay"></div>