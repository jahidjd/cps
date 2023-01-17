@extends('front.layout.layout')
@section('content')
<div class="l-theme-wrapper">

    {{-- menu start --}}
    @include('front.header.menu')
    {{-- menu end --}}

    <!-- <div class="m-site-loader"></div> -->

    {{-- search start --}}
    @include('front.header.search')

    {{-- search end --}}
    
    <div class="l-main-wrapper h-overflow-hidden">
        <div class="l-main-wrapper__holder h-clearfix h-large-bottom-padding h-large-top-padding">
            <div class="container l-main-wrapper__inner">
                <div data-elementor-type="wp-post" data-elementor-id="7137" class="elementor elementor-7137">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-e4262ee elementor-section-full_width elementor-reverse-tablet elementor-reverse-mobile elementor-section-height-default elementor-section-height-default"
                                data-id="e4262ee" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:12213,&quot;url&quot;:&quot;{{url('aminAsset/image/slider/',$slider[0]->photo)}}&quot;},{&quot;id&quot;:12215,&quot;url&quot;:&quot;{{url('aminAsset/image/slider/',$slider[1]->photo)}}&quot;},{&quot;id&quot;:12240,&quot;url&quot;:&quot;{{url('aminAsset/image/slider/',$slider[2]->photo)}}&quot;},{&quot;id&quot;:12217,&quot;url&quot;:&quot;{{url('aminAsset/image/slider/',$slider[3]->photo)}}&quot;}],&quot;background_slideshow_slide_duration&quot;:1800,&quot;background_slideshow_lazyload&quot;:&quot;yes&quot;,&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5ac15ff animated-slow elementor-hidden-phone elementor-invisible"
                                            data-id="5ac15ff" data-element_type="column"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                                            <div class="elementor-column-wrap">
                                                <div class="elementor-widget-wrap">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- slider text --}}
                                        @include('front.header.slider_text')
                                        {{-- slider text end --}}
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1d3a1ec animated-slow elementor-invisible"
                                            data-id="1d3a1ec" data-element_type="column"
                                            data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-dec6c36 elementor-widget elementor-widget-spacer"
                                                        data-id="dec6c36" data-element_type="widget"
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
                                class="elementor-section elementor-top-section elementor-element elementor-element-56fa7dc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="56fa7dc" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <br><br>
                                @php
                                echo $bodyOneT->description
                                @endphp
                            </section>
                        </div>
                    </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-60c38d6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="60c38d6" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-547a69b"
                                    data-id="547a69b" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-8025146 elementor-align-center elementor-widget elementor-widget-button"
                                                data-id="8025146" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href=""
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Place an
                                                                    Order Now</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3d7cb11 elementor-widget elementor-widget-spacer"
                                                data-id="3d7cb11" data-element_type="widget"
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
                        class="elementor-section elementor-top-section elementor-element elementor-element-1d253b9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="1d253b9" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dc20ef8"
                                    data-id="dc20ef8" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-01b17e6 elementor-widget elementor-widget-spacer"
                                                data-id="01b17e6" data-element_type="widget"
                                                data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-spacer">
                                                        <div class="elementor-spacer-inner"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e389244 elementor-widget elementor-widget-heading"
                                                data-id="e389244" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-xl">
                                                        {{$bodyTwoT[0]->title}}</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a94528d elementor-widget elementor-widget-text-editor"
                                                data-id="a94528d" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        <p>{{$bodyTwoT[0]->description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-a72f043 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="a72f043" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        @foreach ($bodyTwo as $key=>$item)
                                                        @if ($key<5) <div
                                                            class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-aef1b64"
                                                            data-id="aef1b64" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-078514d elementor-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-image-box"
                                                                        data-id="078514d" data-element_type="widget"
                                                                        data-settings="{&quot;_animation&quot;:&quot;slideInUp&quot;}"
                                                                        data-widget_type="image-box.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image-box-wrapper">
                                                                                <figure class="elementor-image-box-img">
                                                                                    <img decoding="async" width="150"
                                                                                        height="150"
                                                                                        src="data:image/svg+xml,%3Csvg%20xmlns={{url('aminAsset/image/bodySectionTwo/',$item->image)}}"
                                                                                        class="elementor-animation-grow attachment-thumbnail size-thumbnail wp-image-10769"
                                                                                        alt="{{$item->title}}"
                                                                                        data-lazy-srcset="{{url('aminAsset/image/bodySectionTwo/',$item->image)}} 150w, {{url('aminAsset/image/bodySectionTwo/',$item->image)}} 300w, {{url('aminAsset/image/bodySectionTwo/',$item->image)}} 533w"
                                                                                        data-lazy-sizes="(max-width: 150px) 100vw, 150px"
                                                                                        data-lazy-src="{{url('aminAsset/image/bodySectionTwo/',$item->image)}}" /><noscript><img
                                                                                            decoding="async" width="150"
                                                                                            height="150"
                                                                                            src="{{url('aminAsset/image/bodySectionTwo/',$item->image)}}"
                                                                                            class="elementor-animation-grow attachment-thumbnail size-thumbnail wp-image-10769"
                                                                                           
                                                                                            srcset="{{url('aminAsset/image/bodySectionTwo/',$item->image)}} 150w, {{url('aminAsset/image/bodySectionTwo/',$item->image)}} 300w, {{url('aminAsset/image/bodySectionTwo/',$item->image)}} 533w"
                                                                                            sizes="(max-width: 150px) 100vw, 150px" /></noscript>
                                                                                </figure>
                                                                                <div
                                                                                    class="elementor-image-box-content">
                                                                                    <h4
                                                                                        class="elementor-image-box-title">
                                                                                        {{$item->title}}
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-2e6feaa elementor-widget elementor-widget-text-editor"
                                                                        data-id="2e6feaa" data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="elementor-text-editor elementor-clearfix">
                                                                                <p>{{$item->description}}</p>
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
    class="elementor-section elementor-top-section elementor-element elementor-element-67b4cf4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="67b4cf4" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2ecac82"
                data-id="2ecac82" data-element_type="column">
                <div class="elementor-column-wrap">
                    <div class="elementor-widget-wrap">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section
    class="elementor-section elementor-top-section elementor-element elementor-element-d2e31d0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="d2e31d0" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-873115a"
                data-id="873115a" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-ace4a4f elementor-widget elementor-widget-spacer"
                            data-id="ace4a4f" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-614ca86 elementor-widget elementor-widget-heading"
                            data-id="614ca86" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-xl">{{$service[0]->title}}</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6e3b82f elementor-widget elementor-widget-text-editor"
                            data-id="6e3b82f" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>{{$service[0]->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@forelse ($serviceT as $k=>$v)
@if ($k<3) @if ($k%2==0) <section
    class="elementor-section elementor-top-section elementor-element elementor-element-a21236a elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="a21236a" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-78154d9"
                data-id="78154d9" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-d50dcff elementor-widget elementor-widget-heading"
                            data-id="d50dcff" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-xl"><a
                                        href="">{{$v->title}}</a></h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-82d6292 elementor-widget elementor-widget-text-editor"
                            data-id="82d6292" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-text-editor elementor-clearfix">
                                    <p>{{$v->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-3c24f8a elementor-align-center elementor-widget elementor-widget-button"
                            data-id="3c24f8a" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a href="{{route('serviceDetails',$v->id)}}"
                                        class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">LEARN
                                                MORE</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8af6a2b"
                data-id="8af6a2b" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-f8c8cba elementor-widget elementor-widget-image"
                            data-id="f8c8cba" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-image">
                                    <img decoding="async" width="800" height="400"
                                        src="{{url('aminAsset/image/service/',$v->image)}}"
                                        class="attachment-large size-large wp-image-10832" alt="{{$v->title}}"
                                        data-lazy-srcset="{{url('aminAsset/image/service/',$v->image)}} 800w, {{url('aminAsset/image/service/',$v->image)}} 300w, {{url('aminAsset/image/service/',$v->image)}} 768w"
                                        data-lazy-sizes="(max-width: 800px) 100vw, 800px"
                                        data-lazy-src="{{url('aminAsset/image/service/',$v->image)}}" /><noscript><img
                                            decoding="async" width="800" height="400"
                                            src="{{url('aminAsset/image/service/',$v->image)}}"
                                            class="attachment-large size-large wp-image-10832"
                                            alt="{{$v->title}}"
                                            srcset="{{url('aminAsset/image/service/',$v->image)}} 800w, {{url('aminAsset/image/service/',$v->image)}} 300w, {{url('aminAsset/image/service/',$v->image)}} 768w"
                                            sizes="(max-width: 800px) 100vw, 800px" /></noscript>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    @else
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-c3ce19e elementor-reverse-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="c3ce19e" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-757a4ef"
                    data-id="757a4ef" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-c16f27a elementor-widget elementor-widget-image"
                                data-id="c16f27a" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-image">
                                        <img decoding="async" width="800" height="400"
                                            src="{{url('aminAsset/image/service/',$v->image)}}"
                                            class="attachment-large size-large wp-image-11111"
                                            alt="{{$v->title}}"
                                            data-lazy-srcset="{{url('aminAsset/image/service/',$v->image)}} 300w, {{url('aminAsset/image/service/',$v->image)}} 768w"
                                            data-lazy-sizes="(max-width: 800px) 100vw, 800px"
                                            data-lazy-src="{{url('aminAsset/image/service/',$v->image)}}" /><noscript><img
                                                decoding="async" width="800" height="400"
                                                src="{{url('aminAsset/image/service/',$v->image)}}"
                                                class="attachment-large size-large wp-image-11111"
                                                alt="{{$v->title}}"
                                                srcset="{{url('aminAsset/image/service/',$v->image)}} 800w,{{url('aminAsset/image/service/',$v->image)}} 768w"
                                                sizes="(max-width: 800px) 100vw, 800px" /></noscript>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ec6e99f"
                    data-id="ec6e99f" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-108a99f elementor-widget elementor-widget-heading"
                                data-id="108a99f" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-xl"><a
                                            href="{{route('serviceDetails',$v->id)}}">{{$v->title}}</a></h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-8eced2e elementor-widget elementor-widget-text-editor"
                                data-id="8eced2e" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p>{{$v->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1c20fd5 elementor-align-center elementor-widget elementor-widget-button"
                                data-id="1c20fd5" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="{{route('serviceDetails',$v->id)}}"
                                            class="elementor-button-link elementor-button elementor-size-sm"
                                            role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">LEARN
                                                    MORE</span>
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
    @endif
    @endif
    @empty

    @endforelse




    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-18be756 elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="18be756" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3a7f52c"
                    data-id="3a7f52c" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-95d1b16 elementor-widget elementor-widget-image"
                                data-id="95d1b16" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-image">
                                        <a href="">
                                            <img decoding="async" width="1124" height="216"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201124%20216'%3E%3C/svg%3E"
                                                class="attachment-full size-full wp-image-16128" alt="{{$v->title}}"
                                                data-lazy-srcset="{{url('aminAsset/image/service/',$v->image)}} 1124w, {{url('aminAsset/image/service/',$v->image)}} 300w, {{url('aminAsset/image/service/',$v->image)}} 1024w, {{url('aminAsset/image/service/',$v->image)}} 768w"
                                                data-lazy-sizes="(max-width: 1124px) 100vw, 1124px"
                                                data-lazy-src="{{url('aminAsset/image/service/',$v->image)}}" /><noscript><img
                                                    decoding="async" width="1124" height="216"
                                                    src="{{url('aminAsset/image/service/',$v->image)}}"
                                                    class="attachment-full size-full wp-image-16128"
                                                    alt="{{$v->title}}"
                                                    srcset="{{url('aminAsset/image/service/',$v->image)}} 1124w, {{url('aminAsset/image/service/',$v->image)}} 300w, {{url('aminAsset/image/service/',$v->image)}} 1024w, {{url('aminAsset/image/service/',$v->image)}} 768w"
                                                    sizes="(max-width: 1124px) 100vw, 1124px" /></noscript>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-033b81e elementor-widget elementor-widget-spacer"
                                data-id="033b81e" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-2973b66 elementor-hidden-tablet elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="2973b66" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c6198f1"
                    data-id="c6198f1" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-0a6c42d elementor-widget elementor-widget-spacer"
                                data-id="0a6c42d" data-element_type="widget" data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="elementor-element elementor-element-985c2ce elementor-widget elementor-widget-image"
                                data-id="985c2ce" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-image">
                                        <a href="">
                                            <img decoding="async" width="1121" height="212"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201121%20212'%3E%3C/svg%3E"
                                                class="attachment-full size-full wp-image-16801"
                                                alt="{{$v->title}}"
                                                data-lazy-srcset="{{url('aminAsset/image/service/',$v->image)}} 1121w, {{url('aminAsset/image/service/',$v->image)}} 300w, {{url('aminAsset/image/service/',$v->image)}} 1024w, {{url('aminAsset/image/service/',$v->image)}} 768w"
                                                data-lazy-sizes="(max-width: 1121px) 100vw, 1121px"
                                                data-lazy-src="wp-content/uploads/2022/09/Video-editing-Banner-e1663324179422.png" /><noscript><img
                                                    decoding="async" width="1121" height="212"
                                                    src="wp-content/uploads/2022/09/Video-editing-Banner-e1663324179422.png"
                                                    class="attachment-full size-full wp-image-16801"
                                                    alt="{{$v->title}}"
                                                    srcset="{{url('aminAsset/image/service/',$v->image)}} 1121w, {{url('aminAsset/image/service/',$v->image)}} 300w, {{url('aminAsset/image/service/',$v->image)}} 1024w, {{url('aminAsset/image/service/',$v->image)}} 768w"
                                                    sizes="(max-width: 1121px) 100vw, 1121px" /></noscript>
                                        </a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section
        class="elementor-section elementor-top-section elementor-element elementor-element-c2f40bc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="c2f40bc" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8c8ec46"
                    data-id="8c8ec46" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-2820d8c elementor-align-center elementor-widget elementor-widget-button"
                                data-id="2820d8c" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="{{route('contact')}}"
                                            class="elementor-button-link elementor-button elementor-size-sm"
                                            role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Contact
                                                    US</span>
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
    </section> --}}
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-4ae7bdb elementor-reverse-mobile elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4ae7bdb" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8abaa99"
                    data-id="8abaa99" data-element_type="column">
                    <div class="elementor-column-wrap">
                        <div class="elementor-widget-wrap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-3aaaf410 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="3aaaf410" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f1248c8"
                    data-id="f1248c8" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-684efb1 elementor-widget elementor-widget-spacer"
                                data-id="684efb1" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-edc294c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="edc294c" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b4223b0"
                    data-id="b4223b0" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-b4ab7dd elementor-align-center elementor-widget elementor-widget-button"
                                data-id="b4ab7dd" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="{{route('service')}}"
                                            class="elementor-button-link elementor-button elementor-size-sm"
                                            role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Our More
                                                    Services</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d71e81a elementor-hidden-phone elementor-widget elementor-widget-spacer"
                                data-id="d71e81a" data-element_type="widget" data-widget_type="spacer.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-56ca7aa elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="56ca7aa" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-610e038"
                    data-id="610e038" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            
                                       
                                @php
                                    echo $bodySectionThree->description
                                @endphp
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-5356486 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="5356486" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6ab1872"
                                            data-id="6ab1872" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-5e548ac elementor-widget elementor-widget-spacer"
                                                        data-id="5e548ac" data-element_type="widget"
                                                        data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-5a3614d elementor-widget elementor-widget-heading"
                                                        data-id="5a3614d" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h3 class="elementor-heading-title elementor-size-xl">
                                                                {{$homePricing[0]->title}}</h3>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-e8a049d elementor-widget elementor-widget-text-editor"
                                                        data-id="e8a049d" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                <p>{{$homePricing[0]->description}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-eb7a86b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="eb7a86b" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                @foreach ($homePricingT as $k=>$v)
                                                                @if ($k<4) <div
                                                                    class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-53ab4eb"
                                                                    data-id="53ab4eb" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-7fe8b53 elementor-widget elementor-widget-image"
                                                                                data-id="7fe8b53"
                                                                                data-element_type="widget"
                                                                                data-widget_type="image.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image">
                                                                                        <img decoding="async"
                                                                                            width="150" height="150"
                                                                                            src="{{url('aminAsset/image/pricing/homePricingImage/',$v->image)}}"
                                                                                            class="attachment-thumbnail size-thumbnail wp-image-11217"
                                                                                            alt="{{$v->title}}"
                                                                                            data-lazy-srcset="{{url('aminAsset/image/pricing/homePricingImage/',$v->image)}} 150w, {{url('aminAsset/image/pricing/homePricingImage/',$v->image)}} 224w"
                                                                                            data-lazy-sizes="(max-width: 150px) 100vw, 150px"
                                                                                            data-lazy-src="{{url('aminAsset/image/pricing/homePricingImage/',$v->image)}}" /><noscript><img
                                                                                                decoding="async"
                                                                                                width="150" height="150"
                                                                                                src="{{url('aminAsset/image/pricing/homePricingImage/',$v->image)}}"
                                                                                                class="attachment-thumbnail size-thumbnail wp-image-11217"
                                                                                                alt="{{$v->title}}"
                                                                                                srcset="{{url('aminAsset/image/pricing/homePricingImage/',$v->image)}} 150w, {{url('aminAsset/image/pricing/homePricingImage/',$v->image)}} 224w"
                                                                                                sizes="(max-width: 150px) 100vw, 150px" /></noscript>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-bf28852 elementor-widget elementor-widget-text-editor"
                                                                                data-id="bf28852"
                                                                                data-element_type="widget"
                                                                                data-widget_type="text-editor.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div
                                                                                        class="elementor-text-editor elementor-clearfix">
                                                                                        <p>{{$v->title}}</p>
                                                                                        <h5>{{$v->description}} </h5>
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
                                class="elementor-section elementor-top-section elementor-element elementor-element-2c62587 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="2c62587" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bec76d7"
                                            data-id="bec76d7" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-65e739e elementor-widget elementor-widget-text-editor"
                                                        data-id="65e739e" data-element_type="widget"
                                                        data-widget_type="text-editor.default">

                                                    </div>
                                                    <div class="elementor-element elementor-element-489ed7f elementor-align-center elementor-widget elementor-widget-button"
                                                        data-id="489ed7f" data-element_type="widget"
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="{{route('pricings')}}"
                                                                    class="elementor-button-link elementor-button elementor-size-sm"
                                                                    role="button">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-text">See
                                                                            All Pricing</span>
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
    {{-- <section
        class="elementor-section elementor-top-section elementor-element elementor-element-fc754e3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="fc754e3" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4a330d0"
                    data-id="4a330d0" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-8a4d4a7 elementor-widget elementor-widget-spacer"
                                data-id="8a4d4a7" data-element_type="widget" data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ce3c801 elementor-widget elementor-widget-heading"
                                data-id="ce3c801" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-xl">
                                        title</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-0bab969 elementor-widget elementor-widget-text-editor"
                                data-id="0bab969" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-text-editor elementor-clearfix">
                                        <p>descriptopm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-0394cd8 elementor-hidden-phone elementor-widget elementor-widget-spacer"
                                data-id="0394cd8" data-element_type="widget" data-widget_type="spacer.default">
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
    </section> --}}
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-a59312d elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="a59312d" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6943ea0"
                    data-id="6943ea0" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-131304a elementor-widget elementor-widget-heading"
                                data-id="131304a" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h4 class="elementor-heading-title elementor-size-default">
                                        See Our Works in Action</h4>
                                </div>
                            </div>

                            <div class="elementor-element elementor-element-6a646a31 gallery-spacing-custom elementor-widget elementor-widget-image-gallery"
                                data-id="6a646a31" data-element_type="widget" data-widget_type="image-gallery.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-image-gallery">

                                        <style type="text/css">
                                            #gallery-1 {
                                                margin: auto;
                                            }

                                            #gallery-1 .gallery-item {
                                                float: left;
                                                margin-top: 10px;
                                                text-align: center;
                                                width: 33%;
                                            }

                                            #gallery-1 img {
                                                border: 2px solid #cfcfcf;
                                            }

                                            #gallery-1 .gallery-caption {
                                                margin-left: 0;
                                            }

                                            /* <br style="clear: both" /> */
                                            /* see gallery_shortcode() in wp-includes/media.php */
                                        </style>
                                        <div id='gallery-1'
                                            class='gallery galleryid-7137 gallery-columns-3 gallery-size-full'>
                                            @foreach ($works as $k=>$v)
                                            @if ($k<6) <dl class='gallery-item'>
                                                <dt class='gallery-icon landscape'>
                                                    <a data-elementor-open-lightbox="yes"
                                                        data-elementor-lightbox-slideshow="6a646a31"
                                                        data-elementor-lightbox-title="{{$v->title}}"
                                                        e-action-hash="#{{url('aminAsset/image/works/',$v->image)}}"
                                                        href='{{url('aminAsset/image/works/',$v->image)}}'><img
                                                            width="950" height="615"
                                                            src="{{url('aminAsset/image/works/',$v->image)}}"
                                                            class="attachment-full size-full"
                                                            alt="{{$v->title}}" decoding="async"
                                                            aria-describedby="gallery-1-10713"
                                                            data-lazy-srcset="{{url('aminAsset/image/works/',$v->image)}} 950w, {{url('aminAsset/image/works/',$v->image)}} 300w, {{url('aminAsset/image/works/',$v->image)}} 768w"
                                                            data-lazy-sizes="(max-width: 950px) 100vw, 950px"
                                                            data-lazy-src="{{url('aminAsset/image/works/',$v->image)}}" /><noscript><img
                                                                width="950" height="615"
                                                                src="{{url('aminAsset/image/works/',$v->image)}}"
                                                                class="attachment-full size-full"
                                                                alt="{{$v->title}}" decoding="async"
                                                                aria-describedby="gallery-1-10713"
                                                                srcset="{{url('aminAsset/image/works/',$v->image)}} 950w, {{url('aminAsset/image/works/',$v->image)}} 300w,{{url('aminAsset/image/works/',$v->image)}} 768w"
                                                                sizes="(max-width: 950px) 100vw, 950px" /></noscript></a>
                                                </dt>
                                                <dd class='wp-caption-text gallery-caption' id='gallery-1-10713'>
                                                    {{$v->title}}
                                                </dd>
                                                </dl>
                                                @endif
                                                @endforeach


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
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-69e64bb6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="69e64bb6" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-26cd557e"
                    data-id="26cd557e" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-8e4f720 elementor-align-center elementor-widget elementor-widget-button"
                                data-id="8e4f720" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="{{route('workPortfolio')}}"
                                            class="elementor-button-link elementor-button elementor-size-sm"
                                            role="button">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">See Our More
                                                    Works</span>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-ec39741 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="ec39741" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2bfa677d"
                    data-id="2bfa677d" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-848be41 elementor-widget elementor-widget-heading"
                                data-id="848be41" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h4 class="elementor-heading-title elementor-size-large">
                                        Customers reviews</h4>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-26230fce elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="26230fce" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        @foreach ($customer as $k=>$v)
                                            @if ($k<3)
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9f6961e"
                                            data-id="9f6961e" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-3280bae3 elementor-widget elementor-widget-testimonial"
                                                        data-id="3280bae3" data-element_type="widget"
                                                        data-widget_type="testimonial.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-testimonial-wrapper">
                                                                <div class="elementor-testimonial-content">
                                                                    {{$v->details}}</div>

                                                                <div
                                                                    class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                                                    <div class="elementor-testimonial-meta-inner">
                                                                        <div class="elementor-testimonial-image">
                                                                            <img decoding="async" width="150"
                                                                                height="150"
                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E"
                                                                                class="attachment-thumbnail size-thumbnail wp-image-10896"
                                                                                alt="{{$v->name}}"
                                                                                data-lazy-srcset="{{url('aminAsset/image/customerReview/',$v->image)}} 150w, {{url('aminAsset/image/customerReview/',$v->image)}} 300w, {{url('aminAsset/image/customerReview/',$v->image)}} 400w"
                                                                                data-lazy-sizes="(max-width: 150px) 100vw, 150px"
                                                                                data-lazy-src="{{url('aminAsset/image/customerReview/',$v->image)}}" /><noscript><img
                                                                                    decoding="async" width="150"
                                                                                    height="150"
                                                                                    src="{{url('aminAsset/image/customerReview/',$v->image)}}"
                                                                                    class="attachment-thumbnail size-thumbnail wp-image-10896"
                                                                                    alt="{{$v->name}}"
                                                                                    srcset="{{url('aminAsset/image/customerReview/',$v->image)}} 150w, {{url('aminAsset/image/customerReview/',$v->image)}} 300w, {{url('aminAsset/image/customerReview/',$v->image)}} 400w"
                                                                                    sizes="(max-width: 150px) 100vw, 150px" /></noscript>
                                                                        </div>

                                                                        <div class="elementor-testimonial-details">
                                                                            <div class="elementor-testimonial-name">
                                                                                {{$v->name}}
                                                                            </div>
                                                                            <div class="elementor-testimonial-job">
                                                                                {{$v->position}}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
        class="elementor-section elementor-inner-section elementor-element elementor-element-5da243c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="5da243c" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                @foreach ($cLogo as $k=>$v)
                @if ($k<8)
                <div class="elementor-column elementor-col-12 elementor-inner-column elementor-element elementor-element-58ec7db animated-slow elementor-invisible"
                data-id="58ec7db" data-element_type="column"
                data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_delay&quot;:1600}">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-ba5e137 elementor-widget elementor-widget-image"
                            data-id="ba5e137" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-image">
                                    <img decoding="async" width="250" height="250"
                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20250%20250'%3E%3C/svg%3E"
                                        class="attachment-full size-full wp-image-10873" alt=""
                                        data-lazy-srcset="{{url('aminAsset/image/clientsLogo/',$v->image)}} 250w, {{url('aminAsset/image/clientsLogo/',$v->image)}}"
                                        data-lazy-sizes="(max-width: 250px) 100vw, 250px"
                                        data-lazy-src="{{url('aminAsset/image/clientsLogo/',$v->image)}}" /><noscript><img
                                            decoding="async" width="250" height="250"
                                            alt="{{$v->title}}"
                                            src="{{url('aminAsset/image/clientsLogo/',$v->image)}}"
                                            class="attachment-full size-full wp-image-10873" alt=""
                                            srcset="{{url('aminAsset/image/clientsLogo/',$v->image)}} 250w, {{url('aminAsset/image/clientsLogo/',$v->image)}} 150w"
                                            sizes="(max-width: 250px) 100vw, 250px" /></noscript>
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
    </div>
    <div class="o-slidingbar d-none d-lg-block">
        @include('front.header.quickMenu')
    </div>
    {{-- footer start --}}
    @include('front.footer.footer')
    </div>
    @endsection