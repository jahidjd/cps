@extends('front.layout.layout')
@section('content')



<link data-minify="1" rel='preload'  href='{{asset('assets/plugins/elementor/assets/css/post-10762.css?ver=1665667588')}}' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />

    {{-- end link --}}
    <!-- / Yoast SEO plugin. -->
    <div class="l-theme-wrapper">

        {{-- menu start --}}
        @include('front.header.menu')
        {{-- menu end --}}
        <br><br><br><br><br>
        <div class="l-main-wrapper h-overflow-hidden">
            <div data-elementor-type="wp-page" data-elementor-id="10762" class="elementor elementor-10762">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-8947c51 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                            data-id="8947c51" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1499ebf"
                                        data-id="1499ebf" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-d6691a9 elementor-widget elementor-widget-heading"
                                                    data-id="d6691a9" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default">{{$general->contact_text}}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-a0b795e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="a0b795e" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-bea3ede"
                                        data-id="bea3ede" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-e6e07be elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="e6e07be" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7149980"
                                                                data-id="7149980" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-9ab6fad elementor-widget elementor-widget-heading"
                                                                            data-id="9ab6fad" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Get a Free Trial</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-91e1540 elementor-widget elementor-widget-shortcode"
                                                                            data-id="91e1540" data-element_type="widget"
                                                                            data-widget_type="shortcode.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-shortcode">
                                                                                    <div class="wpcf7 no-js"
                                                                                       
                                                                                        lang="en-US" dir="ltr">
                                                                                        @if ($message = Session::get('success'))
                                                                                        <div class="alert alert-success">
                                                                                            <strong style="color: green">{{ $message }}</strong>
                                                                                        </div>
                                                                                        @endif
                                                                                        <form action="{{route('addContactMessage')}}"  method="post" enctype="multipart/form-data" >
                                                                                            @csrf
                                                                                            
                                                                                            <div >
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xs-12 col-sm-6 col-md-6">
                                                                                                        <p><i
                                                                                                                class="fa fa-user"></i><span
                                                                                                                class="wpcf7-form-control-wrap"
                                                                                                                data-name="your-name">
                                                                                                                @error('name')
                                                                                                                <span style="color: red">{{$message}}</span> 
                                                                                                                @enderror
                                                                                                                <input
                                                                                                                    size="40"
                                                                                                                    class="wpcf7-form-control"
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    placeholder="Your Name"
                                                                                                                    value="{{old('name')}}"
                                                                                                                    type="text"
                                                                                                                    name="name" /></span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-xs-12 col-sm-6 col-md-6">
                                                                                                        <p><i
                                                                                                                class="fa fa-envelope"></i><span
                                                                                                                class="wpcf7-form-control-wrap"
                                                                                                                data-name="email">
                                                                                                                @error('email')
                                                                                                                <span style="color: red">{{$message}}</span> 
                                                                                                                @enderror
                                                                                                                <input
                                                                                                                    size="40"
                                                                                                                    class="wpcf7-form-control"
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    placeholder="Email"
                                                                                                                    value="{{old('email')}}"
                                                                                                                    type="email"
                                                                                                                    name="email" /></span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div style="margin-top: 10px;"
                                                                                                    class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <p><i
                                                                                                                class="fa fa-phone"></i><span
                                                                                                                class="wpcf7-form-control-wrap"
                                                                                                                data-name="Phone">
                                                                                                                @error('phone')
                                                                                                                  <span style="color: red">{{$message}}</span>  
                                                                                                                @enderror
                                                                                                                <input
                                                                                                                    size="40"
                                                                                                                    class="wpcf7-form-control "
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    placeholder="Phone"
                                                                                                                    value="{{old('phone')}}"
                                                                                                                    type="text"
                                                                                                                    name="phone" /></span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                
                                                                                                
                                                                                                
                                                                                              
                                                                                                
                                                                                                <div style="margin-top: 10px; padding-left: 180px;"
                                                                                                    align="center"
                                                                                                    class="row">
                                                                                                    <div
                                                                                                        class="col-md-12; align-items: center;">
                                                                                                        <p><button type="submit">Submit</button>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                        </form><br>
                                                                                    </div>
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
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a4420bb"
                                        data-id="a4420bb" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-5291986 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="5291986" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-fff21c1"
                                                                data-id="fff21c1" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-b2ca6c3 elementor-widget elementor-widget-heading"
                                                                            data-id="b2ca6c3" data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Contact Information</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-48dcf60 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="48dcf60" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9937acc"
                                                                data-id="9937acc" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-67a8eb6 elementor-widget elementor-widget-google_maps"
                                                                            data-id="67a8eb6" data-element_type="widget"
                                                                            data-widget_type="google_maps.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-custom-embed">
                                                                                    <iframe loading="lazy" frameborder="0"
                                                                                        scrolling="no" marginheight="0"
                                                                                        marginwidth="0" src="about:blank"
                                                                                        title="172-33 90th Avenue, 1st Floor, Jamaica, NY 11432"
                                                                                        aria-label="172-33 90th Avenue, 1st Floor, Jamaica, NY 11432"
                                                                                        data-rocket-lazyload="fitvidscompatible"
                                                                                        data-lazy-src="{{$general->map}}"></iframe><noscript><iframe
                                                                                            frameborder="0" scrolling="no"
                                                                                            marginheight="0"
                                                                                            marginwidth="0"
                                                                                            src="{{$general->map}}"
                                                                                            title="172-33 90th Avenue, 1st Floor, Jamaica, NY 11432"
                                                                                            aria-label="172-33 90th Avenue, 1st Floor, Jamaica, NY 11432"></iframe></noscript>
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
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-ecc0882 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="ecc0882" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5cb62fa"
                                                                data-id="5cb62fa" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-ab552a3 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                            data-id="ab552a3" data-element_type="widget"
                                                                            data-widget_type="icon-box.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-box-wrapper">
                                                                                    <div class="elementor-icon-box-icon">
                                                                                        <span
                                                                                            class="elementor-icon elementor-animation-">
                                                                                            <i aria-hidden="true"
                                                                                                class="fas fa-map-marker-alt"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="elementor-icon-box-content">
                                                                                        <h6
                                                                                            class="elementor-icon-box-title">
                                                                                            <span>
                                                                                                {{$general->address}}
                                                                                            </span>
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-6009dd5 elementor-view-stacked elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                            data-id="6009dd5" data-element_type="widget"
                                                                            data-widget_type="icon-box.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-box-wrapper">
                                                                                    <div class="elementor-icon-box-icon">
                                                                                        <span
                                                                                            class="elementor-icon elementor-animation-">
                                                                                            <i aria-hidden="true"
                                                                                                class="fas fa-phone"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="elementor-icon-box-content">
                                                                                        <h6
                                                                                            class="elementor-icon-box-title">
                                                                                            <span>
                                                                                                +880 {{$general->phone}} </span>
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-6f0b1cf elementor-view-stacked elementor-vertical-align-middle elementor-position-left elementor-shape-circle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                                            data-id="6f0b1cf" data-element_type="widget"
                                                                            data-widget_type="icon-box.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-icon-box-wrapper">
                                                                                    <div class="elementor-icon-box-icon">
                                                                                        <a class="elementor-icon elementor-animation-"
                                                                                            href="mailto:{{$general->email}}">
                                                                                            <i aria-hidden="true"
                                                                                                class="fas fa-envelope"></i>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="elementor-icon-box-content">
                                                                                        <h6
                                                                                            class="elementor-icon-box-title">
                                                                                            <a
                                                                                                href="mailto:{{$general->email}}">
                                                                                                {{$general->email}}
                                                                                            </a>
                                                                                        </h6>
                                                                                    </div>
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
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-7361559 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="7361559" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3c22db5"
                                        data-id="3c22db5" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-771643b elementor-widget elementor-widget-text-editor"
                                                    data-id="771643b" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <p><br> Having trouble to submit Free Trial? Don&#8217;t worry try
                                                                below options, you can send whatever you want. Data size
                                                                doesn&#8217;t matter.</p>
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-4f681b0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="4f681b0" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fd2c345"
                                        data-id="fd2c345" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-148d8cc elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                    data-id="148d8cc" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6e79172"
                                                                data-id="6e79172" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-ae98c4a elementor-widget elementor-widget-image"
                                                                            data-id="ae98c4a" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="100" height="100"
                                                                                        decoding="async"
                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%20100'%3E%3C/svg%3E"
                                                                                        title="We-transfer icon"
                                                                                        alt="We-transfer icon"
                                                                                        data-lazy-src="https://theclippingpathservice.com/wp-content/uploads/elementor/thumbs/We-transfer-icon-oi3ezzou0mklkjxnmstkb1hsraupxg5wc5q59u3fu0.png" /><noscript><img
                                                                                            width="100" height="100"
                                                                                            decoding="async"
                                                                                            src="https://theclippingpathservice.com/wp-content/uploads/elementor/thumbs/We-transfer-icon-oi3ezzou0mklkjxnmstkb1hsraupxg5wc5q59u3fu0.png"
                                                                                            title="We-transfer icon"
                                                                                            alt="We-transfer icon" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-13a49fa elementor-widget elementor-widget-text-editor"
                                                                            data-id="13a49fa" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>You can send your images via
                                                                                        WeTransfer</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-2e9faf1 elementor-align-center elementor-widget elementor-widget-button"
                                                                            data-id="2e9faf1" data-element_type="widget"
                                                                            data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a href="https://wetransfer.com/"
                                                                                        target="_blank"
                                                                                        class="elementor-button-link elementor-button elementor-size-sm"
                                                                                        role="button">
                                                                                        <span
                                                                                            class="elementor-button-content-wrapper">
                                                                                            <span
                                                                                                class="elementor-button-text">Sent
                                                                                                Using WeTransfer</span>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ac40343"
                                        data-id="ac40343" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <section
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-6c9233b elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                    data-id="6c9233b" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-79f2f22"
                                                                data-id="79f2f22" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-249aabe elementor-widget elementor-widget-image"
                                                                            data-id="249aabe" data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image">
                                                                                    <img width="100" height="100"
                                                                                        decoding="async"
                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%20100'%3E%3C/svg%3E"
                                                                                        title="Dopbox icon"
                                                                                        alt="Dopbox icon"
                                                                                        data-lazy-src="https://theclippingpathservice.com/wp-content/uploads/elementor/thumbs/Dopbox-icon-oi3er5zdumhokcr55zhnw9nzz2cnnr4mgh812b6i94.png" /><noscript><img
                                                                                            width="100" height="100"
                                                                                            decoding="async"
                                                                                            src="https://theclippingpathservice.com/wp-content/uploads/elementor/thumbs/Dopbox-icon-oi3er5zdumhokcr55zhnw9nzz2cnnr4mgh812b6i94.png"
                                                                                            title="Dopbox icon"
                                                                                            alt="Dopbox icon" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-ec57476 elementor-widget elementor-widget-text-editor"
                                                                            data-id="ec57476" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>You can send your images via DropBox
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-6fb986d elementor-align-center elementor-widget elementor-widget-button"
                                                                            data-id="6fb986d" data-element_type="widget"
                                                                            data-widget_type="button.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-button-wrapper">
                                                                                    <a href="https://www.dropbox.com/request/DqwYbccbjFWMxFiAGGZ3"
                                                                                        target="_blank"
                                                                                        class="elementor-button-link elementor-button elementor-size-sm"
                                                                                        role="button">
                                                                                        <span
                                                                                            class="elementor-button-content-wrapper">
                                                                                            <span
                                                                                                class="elementor-button-text">Sent
                                                                                                Using DropBox</span>
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
     @include('front.footer.footer')
    </div>
@endsection
