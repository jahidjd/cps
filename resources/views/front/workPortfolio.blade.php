@extends('front.layout.layout')
@section('content')


<link data-minify="1" rel='preload'  href='{{asset('assets/plugins/elementor/assets/css/post-10598.css?ver=1665658971')}}' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />



{{-- end link --}}
    <div class="l-theme-wrapper">

        {{-- menu start --}}
        @include('front.header.menu')
        {{-- menu end --}}
        <br><br><br><br><br>
        <div class="m-site-search d-none d-lg-block">
            <div class="m-site-search__content">
                <div class="container">
                    <div class="m-site-search__content__inner">
                        <div class="m-site-search__close-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </div>
                        <div class="m-site-search__form">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <form action="https://theclippingpathservice.com/" method="get">
                                        <input class="m-site-search__form__input" placeholder="Search..." type="search"
                                            name="s" id="search" />
                                        <label class="m-site-search__form__icon">
                                            <input type="submit" />
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-search">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <line x1="21" y1="21" x2="16.65" y2="16.65">
                                                    </line>
                                                </svg>
                                            </span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-main-wrapper h-overflow-hidden">
            <div data-elementor-type="wp-page" data-elementor-id="10598" class="elementor elementor-10598">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-9a5ce0a elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                            data-id="9a5ce0a" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" 
                            >
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bfa784a"
                                        data-id="bfa784a" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-bab2c93 elementor-widget elementor-widget-heading"
                                                    data-id="bab2c93" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default" >{{$general->portfolio_text}}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-5aed49a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="5aed49a" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-856e2c4"
                                        data-id="856e2c4" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-2b5a232 elementor-widget elementor-widget-heading"
                                                    data-id="2b5a232" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">{{$works[0]->title}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fcc4524"
                                        data-id="fcc4524" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-98176f3 elementor-widget elementor-widget-heading"
                                                    data-id="98176f3" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">
                                                            {{$works[1]->title}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-8ec636a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="8ec636a" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e5a94d7"
                                        data-id="e5a94d7" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-2b52229 elementor-widget elementor-widget-image"
                                                    data-id="2b52229" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img decoding="async" width="561" height="370"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/works/',$works[0]->image)}}"
                                                                class="attachment-full size-full wp-image-15091"
                                                                alt="Clipping Path"
                                                                data-lazy-srcset="{{url('aminAsset/image/works/',$works[0]->image)}} 561w, {{url('aminAsset/image/works/',$works[0]->image)}} 300w"
                                                                data-lazy-sizes="(max-width: 561px) 100vw, 561px"
                                                                data-lazy-src="{{url('aminAsset/image/works/',$works[0]->image)}}" /><noscript><img
                                                                    decoding="async" width="561" height="370"
                                                                    src="{{url('aminAsset/image/works/',$works[0]->image)}}"
                                                                    class="attachment-full size-full wp-image-15091"
                                                                    alt="Clipping Path"
                                                                    srcset="{{url('aminAsset/image/works/',$works[0]->image)}} 561w, {{url('aminAsset/image/works/',$works[0]->image)}} 300w"
                                                                    sizes="(max-width: 561px) 100vw, 561px" /></noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-eecf3b0"
                                        data-id="eecf3b0" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-6336f18 elementor-widget elementor-widget-image"
                                                    data-id="6336f18" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img decoding="async" width="561" height="370"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/works/',$works[2]->image)}}"
                                                                class="attachment-large size-large wp-image-15096"
                                                                alt="Background Remove"
                                                                data-lazy-srcset="{{url('aminAsset/image/works/',$works[1]->image)}} 561w, {{url('aminAsset/image/works/',$works[1]->image)}} 300w"
                                                                data-lazy-sizes="(max-width: 561px) 100vw, 561px"
                                                                data-lazy-src="{{url('aminAsset/image/works/',$works[1]->image)}}" /><noscript><img
                                                                    decoding="async" width="561" height="370"
                                                                    src="{{url('aminAsset/image/works/',$works[1]->image)}}"
                                                                    class="attachment-large size-large wp-image-15096"
                                                                    alt="Background Remove"
                                                                    srcset="{{url('aminAsset/image/works/',$works[1]->image)}} 561w, {{url('aminAsset/image/works/',$works[1]->image)}} 300w"
                                                                    sizes="(max-width: 561px) 100vw, 561px" /></noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-b426557 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="b426557" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-93d19b8"
                                        data-id="93d19b8" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-3e688c5 elementor-button-info elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="3e688c5" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="https://theclippingpathservice.com/free-trial/"
                                                                class="elementor-button-link elementor-button elementor-size-lg"
                                                                role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">Get a Free
                                                                        Trial</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4c7492d"
                                        data-id="4c7492d" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-e1b3394 elementor-button-info elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="e1b3394" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="https://order.theclippingpathservice.com/"
                                                                class="elementor-button-link elementor-button elementor-size-lg"
                                                                role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">Order Now</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-f7d35f7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="f7d35f7" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f817aae"
                                        data-id="f817aae" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-2a00d7b elementor-widget elementor-widget-spacer"
                                                    data-id="2a00d7b" data-element_type="widget"
                                                    data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-efa6864 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="efa6864" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d4fab91"
                                        data-id="d4fab91" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-b2f1a31 elementor-widget elementor-widget-heading"
                                                    data-id="b2f1a31" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">
                                                            {{$works[2]->title}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9985dff"
                                        data-id="9985dff" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-ebce798 elementor-widget elementor-widget-heading"
                                                    data-id="ebce798" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">{{$works[3]->title}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-93ac59f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="93ac59f" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a59a8ae"
                                        data-id="a59a8ae" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-1c9a3e5 elementor-widget elementor-widget-image"
                                                    data-id="1c9a3e5" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img decoding="async" width="561" height="370"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/works/',$works[2]->image)}}"
                                                                class="attachment-large size-large wp-image-15099"
                                                                alt="Ecommerce Editing"
                                                                data-lazy-srcset="{{url('aminAsset/image/works/',$works[2]->image)}} 561w, {{url('aminAsset/image/works/',$works[2]->image)}} 300w"
                                                                data-lazy-sizes="(max-width: 561px) 100vw, 561px"
                                                                data-lazy-src="{{url('aminAsset/image/works/',$works[2]->image)}}" /><noscript><img
                                                                    decoding="async" width="561" height="370"
                                                                    src="{{url('aminAsset/image/works/',$works[2]->image)}}"
                                                                    class="attachment-large size-large wp-image-15099"
                                                                    alt="Ecommerce Editing"
                                                                    srcset="{{url('aminAsset/image/works/',$works[2]->image)}} 561w, {{url('aminAsset/image/works/',$works[2]->image)}} 300w"
                                                                    sizes="(max-width: 561px) 100vw, 561px" /></noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-51aa21d"
                                        data-id="51aa21d" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-16c280b elementor-widget elementor-widget-image"
                                                    data-id="16c280b" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img decoding="async" width="561" height="370"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/works/',$works[3]->image)}}"
                                                                class="attachment-large size-large wp-image-15102"
                                                                alt="Image Masking"
                                                                data-lazy-srcset="{{url('aminAsset/image/works/',$works[3]->image)}} 561w, {{url('aminAsset/image/works/',$works[3]->image)}} 300w"
                                                                data-lazy-sizes="(max-width: 561px) 100vw, 561px"
                                                                data-lazy-src="{{url('aminAsset/image/works/',$works[3]->image)}}" /><noscript><img
                                                                    decoding="async" width="561" height="370"
                                                                    src="{{url('aminAsset/image/works/',$works[3]->image)}}"
                                                                    class="attachment-large size-large wp-image-15102"
                                                                    alt="Image Masking"
                                                                    srcset="{{url('aminAsset/image/works/',$works[3]->image)}} 561w,{{url('aminAsset/image/works/',$works[3]->image)}} 300w"
                                                                    sizes="(max-width: 561px) 100vw, 561px" /></noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-66ed6e9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="66ed6e9" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9aceac7"
                                        data-id="9aceac7" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-56dc5b5 elementor-button-info elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="56dc5b5" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="https://order.theclippingpathservice.com/"
                                                                class="elementor-button-link elementor-button elementor-size-lg"
                                                                role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">Order Now</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ee3b724"
                                        data-id="ee3b724" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-783b498 elementor-button-info elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="783b498" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="https://theclippingpathservice.com/free-trial/"
                                                                class="elementor-button-link elementor-button elementor-size-lg"
                                                                role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">{{$works[4]->title}}</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-6105ae2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="6105ae2" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-92cdb03"
                                        data-id="92cdb03" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-aa6ea80 elementor-widget elementor-widget-spacer"
                                                    data-id="aa6ea80" data-element_type="widget"
                                                    data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-e1c736f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="e1c736f" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7800e92"
                                        data-id="7800e92" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-c4eba4b elementor-widget elementor-widget-heading"
                                                    data-id="c4eba4b" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">{{$works[5]->title}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-00937b7"
                                        data-id="00937b7" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-ca04f21 elementor-widget elementor-widget-heading"
                                                    data-id="ca04f21" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">{{$works[6]->title}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-a87344a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="a87344a" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cb547c6"
                                        data-id="cb547c6" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-8e39336 elementor-widget elementor-widget-image"
                                                    data-id="8e39336" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img decoding="async" width="561" height="370"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/works/',$works[5]->image)}}"
                                                                class="attachment-large size-large wp-image-15101"
                                                                alt="Ghost Mannequin"
                                                                data-lazy-srcset="{{url('aminAsset/image/works/',$works[5]->image)}} 561w, {{url('aminAsset/image/works/',$works[5]->image)}} 300w"
                                                                data-lazy-sizes="(max-width: 561px) 100vw, 561px"
                                                                data-lazy-src="{{url('aminAsset/image/works/',$works[5]->image)}}" /><noscript><img
                                                                    decoding="async" width="561" height="370"
                                                                    src="{{url('aminAsset/image/works/',$works[5]->image)}}"
                                                                    class="attachment-large size-large wp-image-15101"
                                                                    alt="Ghost Mannequin"
                                                                    srcset="{{url('aminAsset/image/works/',$works[5]->image)}} 561w, {{url('aminAsset/image/works/',$works[5]->image)}} 300w"
                                                                    sizes="(max-width: 561px) 100vw, 561px" /></noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-bddb09f"
                                        data-id="bddb09f" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-7c1a949 elementor-widget elementor-widget-image"
                                                    data-id="7c1a949" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img decoding="async" width="561" height="370"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/works/',$works[6]->image)}}"
                                                                class="attachment-large size-large wp-image-15100"
                                                                alt="Fashion Retouching"
                                                                data-lazy-srcset="{{url('aminAsset/image/works/',$works[6]->image)}} 561w, {{url('aminAsset/image/works/',$works[6]->image)}} 300w"
                                                                data-lazy-sizes="(max-width: 561px) 100vw, 561px"
                                                                data-lazy-src="{{url('aminAsset/image/works/',$works[6]->image)}}" /><noscript><img
                                                                    decoding="async" width="561" height="370"
                                                                    src="{{url('aminAsset/image/works/',$works[6]->image)}}"
                                                                    class="attachment-large size-large wp-image-15100"
                                                                    alt="Fashion Retouching"
                                                                    srcset="{{url('aminAsset/image/works/',$works[6]->image)}} 561w, {{url('aminAsset/image/works/',$works[6]->image)}} 300w"
                                                                    sizes="(max-width: 561px) 100vw, 561px" /></noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-0ccdf93 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="0ccdf93" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-65e5618"
                                        data-id="65e5618" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-eb83fb0 elementor-button-info elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="eb83fb0" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="https://theclippingpathservice.com/free-trial/"
                                                                class="elementor-button-link elementor-button elementor-size-lg"
                                                                role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">Get a Free
                                                                        Trial</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-621589d"
                                        data-id="621589d" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-614dc7d elementor-button-info elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="614dc7d" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="https://order.theclippingpathservice.com/"
                                                                class="elementor-button-link elementor-button elementor-size-lg"
                                                                role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">Order Now</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-f76d5c8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="f76d5c8" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1fac8b1"
                                        data-id="1fac8b1" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-4b3bf92 elementor-widget elementor-widget-spacer"
                                                    data-id="4b3bf92" data-element_type="widget"
                                                    data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-59cd3a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="59cd3a9" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b3c367c"
                                        data-id="b3c367c" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-76e02d3 elementor-widget elementor-widget-heading"
                                                    data-id="76e02d3" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">{{$works[7]->title}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-dd27a03"
                                        data-id="dd27a03" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-ed81168 elementor-widget elementor-widget-heading"
                                                    data-id="ed81168" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">{{$works[8]->title}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-ba7618b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="ba7618b" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-34685c2"
                                        data-id="34685c2" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-95eec03 elementor-widget elementor-widget-image"
                                                    data-id="95eec03" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img decoding="async" width="950" height="615"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/works/',$works[7]->image)}}"
                                                                class="attachment-large size-large wp-image-15078"
                                                                alt="Color-Correction"
                                                                data-lazy-srcset="{{url('aminAsset/image/works/',$works[7]->image)}} 950w, {{url('aminAsset/image/works/',$works[7]->image)}} 300w, {{url('aminAsset/image/works/',$works[7]->image)}} 768w"
                                                                data-lazy-sizes="(max-width: 950px) 100vw, 950px"
                                                                data-lazy-src="{{url('aminAsset/image/works/',$works[7]->image)}}" /><noscript><img
                                                                    decoding="async" width="950" height="615"
                                                                    src="{{url('aminAsset/image/works/',$works[7]->image)}}"
                                                                    class="attachment-large size-large wp-image-15078"
                                                                    alt="Color-Correction"
                                                                    srcset="{{url('aminAsset/image/works/',$works[7]->image)}} 950w, {{url('aminAsset/image/works/',$works[7]->image)}}300w, {{url('aminAsset/image/works/',$works[7]->image)}} 768w"
                                                                    sizes="(max-width: 950px) 100vw, 950px" /></noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-66a9698"
                                        data-id="66a9698" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-79dfdb1 elementor-widget elementor-widget-image"
                                                    data-id="79dfdb1" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            <img decoding="async" width="561" height="370"
                                                                src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/works/',$works[8]->image)}}"
                                                                class="attachment-large size-large wp-image-15103"
                                                                alt=""
                                                                data-lazy-srcset="{{url('aminAsset/image/works/',$works[8]->image)}} 561w, {{url('aminAsset/image/works/',$works[8]->image)}} 300w"
                                                                data-lazy-sizes="(max-width: 561px) 100vw, 561px"
                                                                data-lazy-src={{url('aminAsset/image/works/',$works[8]->image)}}" /><noscript><img
                                                                    decoding="async" width="561" height="370"
                                                                    src="{{url('aminAsset/image/works/',$works[8]->image)}}"
                                                                    class="attachment-large size-large wp-image-15103"
                                                                    alt=""
                                                                    srcset="{{url('aminAsset/image/works/',$works[8]->image)}} 561w, {{url('aminAsset/image/works/',$works[8]->image)}} 300w"
                                                                    sizes="(max-width: 561px) 100vw, 561px" /></noscript>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-88ab3f6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="88ab3f6" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4ca6a5b"
                                        data-id="4ca6a5b" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-1a19d3b elementor-button-info elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="1a19d3b" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="https://order.theclippingpathservice.com/"
                                                                class="elementor-button-link elementor-button elementor-size-lg"
                                                                role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">Order Now</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-78103c5"
                                        data-id="78103c5" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-93a62de elementor-button-info elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="93a62de" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-button-wrapper">
                                                            <a href="https://theclippingpathservice.com/free-trial/"
                                                                class="elementor-button-link elementor-button elementor-size-lg"
                                                                role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">Get a Free
                                                                        Trial</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-0cb0d4d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="0cb0d4d" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2ab5a44"
                                        data-id="2ab5a44" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-11b953a elementor-widget elementor-widget-spacer"
                                                    data-id="11b953a" data-element_type="widget"
                                                    data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="o-slidingbar d-none d-lg-block">
            @include('front.header.quickMenu')
        </div>
           {{-- footer start --}}
    @include('front.footer.footer')
    </div>
@endsection
