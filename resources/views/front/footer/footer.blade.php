<footer class="l-primary-footer l-primary-footer--light-skin h-fadeInFooterNeuron">
    <div class="l-primary-footer__widgets d-none d-sm-none d-md-block">
        <div class="container">
            <div class="l-primary-footer__widgets__space">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div id="text-2" class="widget widget_text">
                            <div class="widgettitle-wrapper">
                                <h3 class="widgettitle">About Us</h3>
                            </div>
                            <div class="textwidget">
                                <p>{{$general->footer_text}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div id="text-4" class="widget widget_text">
                            <div class="widgettitle-wrapper">
                                <h3 class="widgettitle">Contact Us</h3>
                            </div>
                            <div class="textwidget">
                                <p><strong>Email:</strong><br />
                                    <a
                                        href="mailto:{{$general->email}}">{{$general->email}}</a><br />
                                    <strong><br />
                                        Hotline Support:<br />
                                    </strong>Mobile<strong>:</strong> <a href="{{$general->phone}}">+800 {{$general->phone}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div id="nav_menu-1" class="widget widget_nav_menu">
                            <div class="widgettitle-wrapper">
                                <h3 class="widgettitle">Quick Menu</h3>
                            </div>
                            <div class="menu-quick-menu-container">
                                <ul id="menu-quick-menu-1" class="menu">
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11036">
                                        <a href="about-us/index.html">About Us</a></li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11038">
                                        <a href="our-image-editing-services/index.html">Services</a></li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11798">
                                        <a href="blog/index.html">Blog</a></li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-11039">
                                        <a href="privacy-policy/index.html">Privacy &#038; Policy</a></li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14125">
                                        <a href="affiliate-disclaimer/index.html">Affiliate Disclaimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div id="media_image-2" class="widget widget_media_image">
                            <div class="widgettitle-wrapper">
                                <h3 class="widgettitle">We Accept</h3>
                            </div><img width="140" height="126"
                                src="{{url('aminAsset/image/card_image/',$general->card_image)}}"
                                class="image wp-image-11186  attachment-140x126 size-140x126" alt=""
                                decoding="async" style="max-width: 100%; height: auto;" title="We Accept"
                                data-lazy-srcset="{{url('aminAsset/image/card_image/',$general->card_image)}}"
                                data-lazy-sizes="(max-width: 140px) 100vw, 140px"
                                data-lazy-src="{{url('aminAsset/image/card_image/',$general->card_image)}}" /><noscript><img
                                    width="140" height="126"
                                    src="{{url('aminAsset/image/card_image/',$general->card_image)}}"
                                    class="image wp-image-11186  attachment-140x126 size-140x126" alt=""
                                    decoding="async" style="max-width: 100%; height: auto;" title="We Accept"
                                    srcset="{{url('aminAsset/image/card_image/',$general->card_image)}}"
                                    sizes="(max-width: 140px) 100vw, 140px" /></noscript>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="l-primary-footer__copyright">
        <div class="container">
            <div class="l-primary-footer__copyright__space">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-6">
                        <div class="l-primary-footer__copyright__text">
                            <p>{{$general->copyright_text}}</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="m-social-media l-primary-footer__copyright__social-media h-align-right">
                            <ul>
                                <li><a target="_BLANK" href="{{$socialMedia->facebook}}"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_BLANK" href="{{$socialMedia->twitter}}"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a target="_BLANK" href="{{$socialMedia->pinterest}}"><i
                                            class="fab fa-pinterest"></i></a></li>
                                <li><a target="_BLANK" href="{{$socialMedia->instragram}}"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="a-to-top a-to-top--dark a-to-top--scale">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="feather feather-chevron-up">
        <polyline points="18 15 12 9 6 15"></polyline>
    </svg>
</a>