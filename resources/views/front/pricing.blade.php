@extends('front.layout.layout')
@section('content')

<link data-minify="1" rel='preload'  href='{{asset('assets/plugins/elementor/assets/css/post-11364.css')}}' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />

{{-- end link --}}
	<!-- / Yoast SEO plugin. -->
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
            <div class="l-main-wrapper__holder h-clearfix h-large-bottom-padding h-large-top-padding">
                <div class="container l-main-wrapper__inner">
                    <div data-elementor-type="wp-page" data-elementor-id="11364" class="elementor elementor-11364">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-2b2c499 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                                    data-id="2b2c499" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3234b6a"
                                                data-id="3234b6a" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-6e294ae elementor-widget elementor-widget-heading"
                                                            data-id="6e294ae" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h1 class="elementor-heading-title elementor-size-default">
                                                                    {{$general->pricing_text}}</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-cd189de elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="cd189de" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2030ffe"
                                                data-id="2030ffe" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-2ebd696 elementor-widget elementor-widget-text-editor"
                                                            data-id="2ebd696" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-c8ab4aa elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="c8ab4aa" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9e12dfe"
                                                data-id="9e12dfe" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <section
                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-9181cd3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                            data-id="9181cd3" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-row">
                                                                    @foreach ($pricing as $k=>$v)
                                                                        @if ($k<3)
                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1a20f9c"
                                                                        data-id="1a20f9c" data-element_type="column">
                                                                        <div
                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-9f95743 elementor-widget elementor-widget-heading"
                                                                                    data-id="9f95743"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="heading.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <h2
                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                            {{$v->title}}</h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-b5ecedf elementor-widget elementor-widget-image"
                                                                                    data-id="b5ecedf"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="image.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <div class="elementor-image">
                                                                                            <img decoding="async"
                                                                                                width="560"
                                                                                                height="280"
                                                                                                src="{{url('aminAsset/image/pricing/',$v->image)}}"
                                                                                                class="attachment-large size-large wp-image-11377"
                                                                                                alt="{{$v->title}}"
                                                                                                data-lazy-src="{{url('aminAsset/image/pricing/',$v->image)}}" /><noscript><img
                                                                                                    decoding="async"
                                                                                                    width="560"
                                                                                                    height="280"
                                                                                                    src={{url('aminAsset/image/pricing/',$v->image)}}"
                                                                                                    class="attachment-large size-large wp-image-11377"
                                                                                                    alt="{{$v->title}}" /></noscript>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-eec7d5a elementor-widget elementor-widget-spacer"
                                                                                    data-id="eec7d5a"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="spacer.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <div class="elementor-spacer">
                                                                                            <div
                                                                                                class="elementor-spacer-inner">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-61faace elementor-widget elementor-widget-text-editor"
                                                                                    data-id="61faace"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="text-editor.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <div
                                                                                            class="elementor-text-editor elementor-clearfix">
                                                                                            <h3 class="pricing-amount">
                                                                                                {{$v->description}}</h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-b4b3e0a elementor-align-center elementor-widget elementor-widget-button"
                                                                                    data-id="b4b3e0a"
                                                                                    data-element_type="widget"
                                                                                    data-widget_type="button.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">
                                                                                        <div
                                                                                            class="elementor-button-wrapper">
                                                                                            <a href="{{route('freeTrial')}}"
                                                                                                class="elementor-button-link elementor-button elementor-size-md"
                                                                                                role="button">
                                                                                                <span
                                                                                                    class="elementor-button-content-wrapper">
                                                                                                    <span
                                                                                                        class="elementor-button-icon elementor-align-icon-left">
                                                                                                        <i aria-hidden="true"
                                                                                                            class="fas fa-cart-plus"></i>
                                                                                                    </span>
                                                                                                    <span
                                                                                                        class="elementor-button-text">{{$v->button_text}}</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                        @endif
                                                                    @endforeach
                                                                   
                                                                    
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-02431e0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="02431e0" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-row">
                                            @foreach ($pricing as $k=>$v)
                                                @if ($k>2 && $k<6)
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-03c290b"
                                                data-id="03c290b" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-ff6969f elementor-widget elementor-widget-heading"
                                                            data-id="ff6969f" data-element_type="widget"
                                                            data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">
                                                                    {{$v->title}}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-23dbc71 elementor-widget elementor-widget-image"
                                                            data-id="23dbc71" data-element_type="widget"
                                                            data-widget_type="image.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-image">
                                                                    <img decoding="async" width="560" height="280"
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/pricing/',$v->image)}}"
                                                                        class="attachment-large size-large wp-image-11052"
                                                                        alt="{{$v->title}}"
                                                                        data-lazy-src="{{url('aminAsset/image/pricing/',$v->image)}}" /><noscript><img
                                                                            decoding="async" width="560"
                                                                            height="280"
                                                                            src="{{url('aminAsset/image/pricing/',$v->image)}}"
                                                                            class="attachment-large size-large wp-image-11052"
                                                                            alt="{{$v->title}}" /></noscript>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-5ed2554 elementor-widget elementor-widget-spacer"
                                                            data-id="5ed2554" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-44b81d9 elementor-widget elementor-widget-text-editor"
                                                            data-id="44b81d9" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                    <h3 class="pricing-amount">{{$v->description}}</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-d0f2e01 elementor-align-center elementor-widget elementor-widget-button"
                                                            data-id="d0f2e01" data-element_type="widget"
                                                            data-widget_type="button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-button-wrapper">
                                                                    <a href="{{route('freeTrial')}}"
                                                                        class="elementor-button-link elementor-button elementor-size-md"
                                                                        role="button">
                                                                        <span class="elementor-button-content-wrapper">
                                                                            <span
                                                                                class="elementor-button-icon elementor-align-icon-left">
                                                                                <i aria-hidden="true"
                                                                                    class="fas fa-cart-plus"></i> </span>
                                                                            <span class="elementor-button-text">{{$v->button_text}}</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                @endif
                                            @endforeach
                                            
                                            
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-e7d5a49 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="e7d5a49" data-element_type="section">
                                    @foreach ($pricing as $k=>$v)
                                        @if ($k>5 && $k<7)
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-24bd8b0 elementor-hidden-phone"
                                                    data-id="24bd8b0" data-element_type="column">
                                                    <div class="elementor-column-wrap">
                                                        <div class="elementor-widget-wrap">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-741532c"
                                                    data-id="741532c" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-8e2c48f elementor-widget elementor-widget-heading"
                                                                data-id="8e2c48f" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                                        {{$v->title}}</h2>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-8345a6f elementor-widget elementor-widget-image"
                                                                data-id="8345a6f" data-element_type="widget"
                                                                data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img decoding="async" width="800" height="400"
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/pricing/',$v->image)}}"
                                                                            class="attachment-large size-large wp-image-11585"
                                                                            alt="{{$v->title}}"
                                                                            data-lazy-src="{{url('aminAsset/image/pricing/',$v->image)}}" /><noscript><img
                                                                                decoding="async" width="800"
                                                                                height="400"
                                                                                src="{{url('aminAsset/image/pricing/',$v->image)}}"
                                                                                class="attachment-large size-large wp-image-11585"
                                                                                alt="{{$v->title}}" /></noscript>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-d56b09b elementor-widget elementor-widget-spacer"
                                                                data-id="d56b09b" data-element_type="widget"
                                                                data-widget_type="spacer.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-spacer">
                                                                        <div class="elementor-spacer-inner"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-88a93db elementor-widget elementor-widget-text-editor"
                                                                data-id="88a93db" data-element_type="widget"
                                                                data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <h3 class="pricing-amount">{{$v->description}}
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-5fd7960 elementor-align-center elementor-widget elementor-widget-button"
                                                                data-id="5fd7960" data-element_type="widget"
                                                                data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a href="{{route('freeTrial')}}"
                                                                            class="elementor-button-link elementor-button elementor-size-md"
                                                                            role="button">
                                                                            <span class="elementor-button-content-wrapper">
                                                                                <span
                                                                                    class="elementor-button-icon elementor-align-icon-left">
                                                                                    <i aria-hidden="true"
                                                                                        class="fas fa-cart-plus"></i> </span>
                                                                                <span class="elementor-button-text">{{$v->button_text}}</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fd6705b"
                                                    data-id="fd6705b" data-element_type="column">
                                                    <div class="elementor-column-wrap">
                                                        <div class="elementor-widget-wrap">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                   
                                </section>
                                <section
                                    class="elementor-section elementor-top-section elementor-element elementor-element-62145e5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="62145e5" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fc4ffc2"
                                                data-id="fc4ffc2" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-c7ff4d6 elementor-widget elementor-widget-spacer"
                                                            data-id="c7ff4d6" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-f2d7b19 elementor-widget elementor-widget-text-editor"
                                                            data-id="f2d7b19" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                               
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
            </div>
        </div>
        <div class="o-slidingbar d-none d-lg-block">
            @include('front.header.quickMenu')
        </div>
     {{-- footer  --}}
     @include('front.footer.footer')
    </div>
@endsection
