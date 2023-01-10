@extends('front.layout.layout')
@section('content')
    <link data-minify="1" rel='preload'
        href='{{ asset('assets/plugins/elementor/assets/css/post-12035.css?ver=1665670665') }}' data-rocket-async="style"
        as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
        <link data-minify="1" rel='preload'  href='{{ asset('assets/plugins/elementor/assets/css/post-10572.css?ver=1665663351')}}' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />

    {{-- end link --}}
    <!-- / Yoast SEO plugin. -->
    <div class="l-theme-wrapper">

        {{-- menu start --}}
        @include('front.header.menu')
        {{-- menu end --}}
        <br><br><br><br><br>
        <div class="l-main-wrapper h-overflow-hidden">
            <div data-elementor-type="wp-page" data-elementor-id="10572" class="elementor elementor-10572">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-6606799 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                            data-id="6606799" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-33fa09c"
                                        data-id="33fa09c" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-f45d114 elementor-widget elementor-widget-heading"
                                                    data-id="f45d114" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-default">{{$general->service_text}}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-336adb8 elementor-section-content-middle elementor-section-full_width elementor-reverse-tablet elementor-reverse-mobile elementor-section-height-default elementor-section-height-default"
                            data-id="336adb8" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7a221320"
                                        data-id="7a221320" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                @foreach ($serviceT as $k=>$v)
                                                    @if ($k>2 && $k<11 )
                                                        @if ($k%2==0)
                                                                <section
                                                                    class="elementor-section elementor-inner-section elementor-element elementor-element-b9a400f elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                                    data-id="b9a400f" data-element_type="section">
                                                                    <div class="elementor-container elementor-column-gap-no">
                                                                        <div class="elementor-row">
                                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-befac4b animated-slow elementor-invisible"
                                                                                data-id="befac4b" data-element_type="column"
                                                                                data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                                                                                <div
                                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-066fb20 elementor-widget elementor-widget-image"
                                                                                            data-id="066fb20" data-element_type="widget"
                                                                                            data-widget_type="image.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image">
                                                                                                    <img decoding="async" width="950"
                                                                                                        height="615"
                                                                                                        src="{{url('aminAsset/image/service/',$v->image)}}"
                                                                                                        class="attachment-large size-large wp-image-10614"
                                                                                                        alt="Background-Remove-Before-after-service"
                                                                                                        data-lazy-srcset="{{url('aminAsset/image/service/',$v->image)}}, {{url('aminAsset/image/service/',$v->image)}} , {{url('aminAsset/image/service/',$v->image)}} "
                                                                                                        data-lazy-sizes="(max-width: 800px) 100vw, 800px"
                                                                                                        data-lazy-src="{{url('aminAsset/image/service/',$v->image)}}" /><noscript><img
                                                                                                            decoding="async" width="950"
                                                                                                            height="615"
                                                                                                            src="{{url('aminAsset/image/service/',$v->image)}}"
                                                                                                            class="attachment-large size-large wp-image-10614"
                                                                                                            alt="Background-Remove-Before-after-service"
                                                                                                            srcset="{{url('aminAsset/image/service/',$v->image)}} , {{url('aminAsset/image/service/',$v->image)}} , {{url('aminAsset/image/service/',$v->image)}} "
                                                                                                            sizes="(max-width: 800px) 100vw, 800px" /></noscript>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b5651c1 animated-slow elementor-invisible"
                                                                                data-id="b5651c1" data-element_type="column"
                                                                                data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                                                                                <div
                                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-0c84fb7 elementor-view-default elementor-widget elementor-widget-icon"
                                                                                            data-id="0c84fb7" data-element_type="widget"
                                                                                            data-widget_type="icon.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-icon-wrapper">
                                                                                                    <div class="elementor-icon">
                                                                                                        <i aria-hidden="true"
                                                                                                            class="fas fa-images"></i>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-3241bb1 elementor-widget elementor-widget-heading"
                                                                                            data-id="3241bb1" data-element_type="widget"
                                                                                            data-widget_type="heading.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <h2
                                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                                    <a
                                                                                                        href="https://theclippingpathservice.com/background-removal-service/">{{$v->title}}</a>
                                                                                                </h2>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-e78065b elementor-widget elementor-widget-text-editor"
                                                                                            data-id="e78065b" data-element_type="widget"
                                                                                            data-widget_type="text-editor.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div
                                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                                    <p>{{$v->description}}</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-ab5af9c elementor-align-center elementor-widget elementor-widget-button"
                                                                                            data-id="ab5af9c" data-element_type="widget"
                                                                                            data-widget_type="button.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-button-wrapper">
                                                                                                    <a href="{{route('serviceDetails',$v->id)}}"
                                                                                                        class="elementor-button-link elementor-button elementor-size-sm"
                                                                                                        role="button">
                                                                                                        <span
                                                                                                            class="elementor-button-content-wrapper">
                                                                                                            <span
                                                                                                                class="elementor-button-text">LEARN
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
                                                         @else   
                                                            <section
                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-c683dbb elementor-section-content-middle elementor-section-full_width elementor-reverse-tablet elementor-reverse-mobile elementor-section-height-default elementor-section-height-default"
                                                            data-id="c683dbb" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-be8e52a animated-slow elementor-invisible"
                                                                        data-id="be8e52a" data-element_type="column"
                                                                        data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                                                                        <div
                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-4a9c466 elementor-view-default elementor-widget elementor-widget-icon"
                                                                                    data-id="4a9c466" data-element_type="widget"
                                                                                    data-widget_type="icon.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-icon-wrapper">
                                                                                            <div class="elementor-icon">
                                                                                                <i aria-hidden="true"
                                                                                                    class="fas fa-cart-arrow-down"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-4d41d37 elementor-widget elementor-widget-heading"
                                                                                    data-id="4d41d37" data-element_type="widget"
                                                                                    data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2
                                                                                            class="elementor-heading-title elementor-size-default">
                                                                                            <a
                                                                                                href="https://theclippingpathservice.com/ecommerce-product-photo-editing-service/">{{$v->title}}</a>
                                                                                        </h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-7a9d58f elementor-widget elementor-widget-text-editor"
                                                                                    data-id="7a9d58f" data-element_type="widget"
                                                                                    data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div
                                                                                            class="elementor-text-editor elementor-clearfix">
                                                                                            <p>{{$v->description}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-cf27e64 elementor-align-center elementor-widget elementor-widget-button"
                                                                                    data-id="cf27e64" data-element_type="widget"
                                                                                    data-widget_type="button.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-button-wrapper">
                                                                                            <a href="{{route('serviceDetails',$v->id)}}"
                                                                                                class="elementor-button-link elementor-button elementor-size-sm"
                                                                                                role="button">
                                                                                                <span
                                                                                                    class="elementor-button-content-wrapper">
                                                                                                    <span
                                                                                                        class="elementor-button-text">LEARN
                                                                                                        MORE</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-459496e animated-slow elementor-invisible"
                                                                        data-id="459496e" data-element_type="column"
                                                                        data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                                                                        <div
                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-a163293 elementor-widget elementor-widget-image"
                                                                                    data-id="a163293" data-element_type="widget"
                                                                                    data-widget_type="image.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-image">
                                                                                            <img decoding="async" width="950"
                                                                                                        height="615"
                                                                                                        src="{{url('aminAsset/image/service/',$v->image)}}"
                                                                                                        class="attachment-large size-large wp-image-10614"
                                                                                                        alt="Background-Remove-Before-after-service"
                                                                                                        data-lazy-srcset="{{url('aminAsset/image/service/',$v->image)}}, {{url('aminAsset/image/service/',$v->image)}} , {{url('aminAsset/image/service/',$v->image)}} "
                                                                                                        data-lazy-sizes="(max-width: 800px) 100vw, 800px"
                                                                                                        data-lazy-src="{{url('aminAsset/image/service/',$v->image)}}" /><noscript><img
                                                                                                            decoding="async" width="950"
                                                                                                            height="615"
                                                                                                            src="{{url('aminAsset/image/service/',$v->image)}}"
                                                                                                            class="attachment-large size-large wp-image-10614"
                                                                                                            alt="Background-Remove-Before-after-service"
                                                                                                            srcset="{{url('aminAsset/image/service/',$v->image)}} , {{url('aminAsset/image/service/',$v->image)}} , {{url('aminAsset/image/service/',$v->image)}} "
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
                                                        @endif
                                                    @endif
                                                @endforeach
                                                
                                               
                                               
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
