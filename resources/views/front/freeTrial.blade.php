@extends('front.layout.layout')
@section('content')

<link data-minify="1" rel='preload'  href='{{asset('assets/plugins/elementor/assets/css/post-12035.css?ver=1665670665')}}' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />

    {{-- end link --}}
    <!-- / Yoast SEO plugin. -->
    <div class="l-theme-wrapper">

        {{-- menu start --}}
        @include('front.header.menu')
        {{-- menu end --}}
        <br><br><br><br><br>
        <div class="l-main-wrapper h-overflow-hidden">
            <div data-elementor-type="wp-page" data-elementor-id="12035" class="elementor elementor-12035">
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
                                                        <h1 class="elementor-heading-title elementor-size-default">{{$general->free_trl_text}}</h1>
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
                                                                                        <form action="{{route('addFreeTrial')}}" method="post" enctype="multipart/form-data" >
                                                                                            @csrf
                                                                                            
                                                                                            <div 
                                                                                                class="contact-form">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xs-12 col-sm-6 col-md-6">
                                                                                                        <p><i
                                                                                                                class="fa fa-user"></i><span
                                                                                                                class="wpcf7-form-control-wrap"
                                                                                                                data-name="your-name"><input
                                                                                                                    size="40"
                                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    placeholder="Your Name"
                                                                                                                    value=""
                                                                                                                    type="text"
                                                                                                                    name="name" />
                                                                                                                    @error('name')
                                                                                                                    <span style="color: red">{{$message}}</span> 
                                                                                                                    @enderror
                                                                                                                </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-xs-12 col-sm-6 col-md-6">
                                                                                                        <p><i
                                                                                                                class="fa fa-envelope"></i><span
                                                                                                                class="wpcf7-form-control-wrap"
                                                                                                                data-name="email"><input
                                                                                                                    size="40"
                                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    placeholder="Email"
                                                                                                                    value=""
                                                                                                                    type="email"
                                                                                                                    name="email" />
                                                                                                                    @error('email')
                                                                                                                    <span style="color: red">{{$message}}</span> 
                                                                                                                    @enderror
                                                                                                                </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div style="margin-top: 10px;"
                                                                                                    class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <p><i
                                                                                                                class="fa fa-phone"></i><span
                                                                                                                class="wpcf7-form-control-wrap"
                                                                                                                data-name="Phone"><input
                                                                                                                    size="40"
                                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                                    aria-required="true"
                                                                                                                    aria-invalid="false"
                                                                                                                    placeholder="Phone"
                                                                                                                    value=""
                                                                                                                    type="text"
                                                                                                                    name="phone" />
                                                                                                                    @error('phone')
                                                                                                                    <span style="color: red">{{$message}}</span> 
                                                                                                                    @enderror
                                                                                                                </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div style="margin-top: 10px;"
                                                                                                    class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                                                data-name="your-message">
                                                                                                                <blade
                                                                                                                    ___html_tags_0___ />
                                                                                                            </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div style="margin-top: 10px;"
                                                                                                    class="row">
                                                                                                    <div
                                                                                                        class="col-xs-12 col-sm-6 col-md-6">
                                                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                                                data-name="file-245"><input
                                                                                                                    size="40"
                                                                                                                    class="wpcf7-form-control wpcf7-file"
                                                                                                                    accept="audio/*,video/*,image/*"
                                                                                                                    aria-invalid="false"
                                                                                                                    type="file"
                                                                                                                    name="image_one" />
                                                                                                                    @error('image_one')
                                                                                                                    <span style="color: red">{{$message}}</span> 
                                                                                                                    @enderror
                                                                                                                </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-xs-12 col-sm-6 col-md-6">
                                                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                                                data-name="file-960"><input
                                                                                                                    size="40"
                                                                                                                    class="wpcf7-form-control wpcf7-file"
                                                                                                                    accept="audio/*,video/*,image/*"
                                                                                                                    aria-invalid="false"
                                                                                                                    type="file"
                                                                                                                    name="image_two" />
                                                                                                                    @error('image_two')
                                                                                                                    <span style="color: red">{{$message}}</span> 
                                                                                                                    @enderror
                                                                                                                </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <p><br />
                                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload
                                                                                                    File Size Maximum 5 MB
                                                                                                </p>
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xs-12 col-sm-6 col-md-6">
                                                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                                                data-name="file-221"><input
                                                                                                                    size="40"
                                                                                                                    class="wpcf7-form-control wpcf7-file"
                                                                                                                    accept="audio/*,video/*,image/*"
                                                                                                                    aria-invalid="false"
                                                                                                                    type="file"
                                                                                                                    name="image_three" />
                                                                                                                    @error('image_three')
                                                                                                                    <span style="color: red">{{$message}}</span> 
                                                                                                                    @enderror
                                                                                                                </span>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                
                                                                                                <div style="margin-top: 10px; padding-left: 180px;"
                                                                                                    align="center"
                                                                                                    class="row">
                                                                                                    <div
                                                                                                        class="col-md-12; align-items: center;">
                                                                                                        <p><input
                                                                                                                class="wpcf7-form-control  wpcf7-submit btn gradient-bg"
                                                                                                                
                                                                                                                type="submit"
                                                                                                                value="Submit" />
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                        </form>
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
                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-48dcf60 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="48dcf60" data-element_type="section"
                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3041bc7"
                                                                data-id="3041bc7" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-5851d9c elementor-widget elementor-widget-text-editor"
                                                                            data-id="5851d9c" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>If your Image/ file size is more than
                                                                                        5 MB, please consider below options
                                                                                        to transfer your images/ files. For
                                                                                        any assistance please email: <a
                                                                                            href="mailto:{{$general->email}}">{{$general->email}}</a>
                                                                                        or Call: <a
                                                                                            href="tel://{{$general->phone}}">{{$general->phone}}</a></p>
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
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ed79143"
                                                                data-id="ed79143" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <section
                                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-3de57a5 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                                            data-id="3de57a5" data-element_type="section">
                                                                            <div
                                                                                class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-bd05fe6"
                                                                                        data-id="bd05fe6"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                            <div
                                                                                                class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-afc6b25 elementor-widget elementor-widget-image"
                                                                                                    data-id="afc6b25"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="image.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-image">
                                                                                                            <img width="100"
                                                                                                                height="100"
                                                                                                                decoding="async"
                                                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%20100'%3E%3C/svg%3E"
                                                                                                                title="We-transfer icon"
                                                                                                                alt="We-transfer icon"
                                                                                                                data-lazy-src="https://theclippingpathservice.com/wp-content/uploads/elementor/thumbs/We-transfer-icon-oi3ezzou0mklkjxnmstkb1hsraupxg5wc5q59u3fu0.png" /><noscript><img
                                                                                                                    width="100"
                                                                                                                    height="100"
                                                                                                                    decoding="async"
                                                                                                                    src="https://theclippingpathservice.com/wp-content/uploads/elementor/thumbs/We-transfer-icon-oi3ezzou0mklkjxnmstkb1hsraupxg5wc5q59u3fu0.png"
                                                                                                                    title="We-transfer icon"
                                                                                                                    alt="We-transfer icon" /></noscript>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-9d277f1 elementor-widget elementor-widget-text-editor"
                                                                                                    data-id="9d277f1"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="text-editor.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-text-editor elementor-clearfix">
                                                                                                            <p>You can send
                                                                                                                your images
                                                                                                                via
                                                                                                                WeTransfer
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-273ef22 elementor-align-center elementor-widget elementor-widget-button"
                                                                                                    data-id="273ef22"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="button.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-button-wrapper">
                                                                                                            <a href="https://wetransfer.com/"
                                                                                                                target="_blank"
                                                                                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                                                                                role="button">
                                                                                                                <span
                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                    <span
                                                                                                                        class="elementor-button-text">Sent
                                                                                                                        Using
                                                                                                                        WeTransfer</span>
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
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e3b3e11"
                                                                data-id="e3b3e11" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <section
                                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-a3f002e elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                                            data-id="a3f002e" data-element_type="section">
                                                                            <div
                                                                                class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9afae3b"
                                                                                        data-id="9afae3b"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                            <div
                                                                                                class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-3aaa120 elementor-widget elementor-widget-image"
                                                                                                    data-id="3aaa120"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="image.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-image">
                                                                                                            <img width="100"
                                                                                                                height="100"
                                                                                                                decoding="async"
                                                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20100%20100'%3E%3C/svg%3E"
                                                                                                                title="Dopbox icon"
                                                                                                                alt="Dopbox icon"
                                                                                                                data-lazy-src="https://theclippingpathservice.com/wp-content/uploads/elementor/thumbs/Dopbox-icon-oi3er5zdumhokcr55zhnw9nzz2cnnr4mgh812b6i94.png" /><noscript><img
                                                                                                                    width="100"
                                                                                                                    height="100"
                                                                                                                    decoding="async"
                                                                                                                    src="https://theclippingpathservice.com/wp-content/uploads/elementor/thumbs/Dopbox-icon-oi3er5zdumhokcr55zhnw9nzz2cnnr4mgh812b6i94.png"
                                                                                                                    title="Dopbox icon"
                                                                                                                    alt="Dopbox icon" /></noscript>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-0e1d895 elementor-widget elementor-widget-text-editor"
                                                                                                    data-id="0e1d895"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="text-editor.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-text-editor elementor-clearfix">
                                                                                                            <p>You can send
                                                                                                                your images
                                                                                                                via DropBox
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-c912b7f elementor-align-center elementor-widget elementor-widget-button"
                                                                                                    data-id="c912b7f"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="button.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-button-wrapper">
                                                                                                            <a href="https://www.dropbox.com/request/DqwYbccbjFWMxFiAGGZ3"
                                                                                                                target="_blank"
                                                                                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                                                                                role="button">
                                                                                                                <span
                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                    <span
                                                                                                                        class="elementor-button-text">Sent
                                                                                                                        Using
                                                                                                                        DropBox</span>
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
