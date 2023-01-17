@extends('front.layout.layout')
@section('content')


<link data-minify="1" rel='preload' href='{{ asset('assets/cache/min/1/wp-content/uploads/elementor/css/post-10698.css?ver=1665658641') }}' data-rocket-async="style"
    as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />








<div class="l-theme-wrapper">

    <div
        class="l-primary-header--responsive-wrapper l-primary-header--sticky l-primary-header--responsive-height l-primary-header--autohide">

    </div>


    {{-- menu start --}}
    @include('front.header.menu')
    {{-- menu end --}}


    <br><br><br><br>
    <div class="m-site-search d-none d-lg-block">
        <div class="m-site-search__content">
            <div class="container">
                <div class="m-site-search__content__inner">
                    <div class="m-site-search__close-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                    <div class="m-site-search__form">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <form action="" method="get">
                                    <input class="m-site-search__form__input" placeholder="Search..." type="search"
                                        name="s" id="search" />
                                    <label class="m-site-search__form__icon">
                                        <input type="submit" />
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
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
                <div data-elementor-type="wp-page" data-elementor-id="10698" class="elementor elementor-10698">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-58ed25f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="58ed25f" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ea82d2d"
                                            data-id="ea82d2d" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-b816a01 elementor-hidden-phone elementor-widget elementor-widget-spacer"
                                                        data-id="b816a01" data-element_type="widget"
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
                                class="elementor-section elementor-top-section elementor-element elementor-element-bfc8d08 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                                data-id="bfc8d08" data-element_type="section"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fbf734c"
                                            data-id="fbf734c" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-4ca8e61 elementor-widget elementor-widget-heading"
                                                        data-id="4ca8e61" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h1 class="elementor-heading-title elementor-size-default">
                                                                {{$service->service->title}}
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-358c625 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                data-id="358c625" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fce47df"
                                            data-id="fce47df" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-e5c958a elementor-hidden-phone elementor-widget elementor-widget-spacer"
                                                        data-id="e5c958a" data-element_type="widget"
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
                                class="elementor-section elementor-top-section elementor-element elementor-element-f3def68 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="f3def68" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    @php
                                    echo $service->service_details
                                    @endphp
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-c7ab29a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="c7ab29a" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b5006b7"
                                            data-id="b5006b7" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-ce29c0b elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                        data-id="ce29c0b" data-element_type="widget"
                                                        data-widget_type="divider.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-divider">
                                                                <span class="elementor-divider-separator">
                                                                </span>
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
                                class="elementor-section elementor-top-section elementor-element elementor-element-09f1be5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="09f1be5" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1ebf2b9"
                                            data-id="1ebf2b9" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-1b708e4 elementor-widget elementor-widget-text-editor"
                                                        data-id="1b708e4" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                @php
                                                                echo $service->details_quote_one
                                                                @endphp
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
                                class="elementor-section elementor-top-section elementor-element elementor-element-01169a6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="01169a6" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a851a1a"
                                            data-id="a851a1a" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-93e6c27 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                        data-id="93e6c27" data-element_type="widget"
                                                        data-widget_type="divider.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-divider">
                                                                <span class="elementor-divider-separator">
                                                                </span>
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
                                class="elementor-section elementor-top-section elementor-element elementor-element-5b701b9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="5b701b9" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9908b86"
                                            data-id="9908b86" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-07a78b8 elementor-widget elementor-widget-heading"
                                                        data-id="07a78b8" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h3 class="elementor-heading-title elementor-size-xl">
                                                                Our
                                                                Strongest Areas</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-73c354b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="73c354b" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        @foreach ($bodySectionTwo as $k=>$v)
                                        @if ( $k<4) <div
                                            class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-a2d84ad"
                                            data-id="a2d84ad" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-52774c3 elementor-widget elementor-widget-image"
                                                        data-id="52774c3" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                <img width="150" height="150" decoding="async"
                                                                    src="data:image/svg+xml,%3Csvg%20xmlns={{url('aminAsset/image/bodySectionTwo/',$v->image)}}"
                                                                    title="Our Resource" alt="Our Resource"
                                                                    data-lazy-src="{{url('aminAsset/image/bodySectionTwo/',$v->image)}}" /><noscript><img
                                                                        width="150" height="150" decoding="async"
                                                                        src="{{url('aminAsset/image/bodySectionTwo/',$v->image)}}"
                                                                        title="Our Resource"
                                                                        alt="Our Resource" /></noscript>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-d0109dd elementor-widget elementor-widget-heading"
                                                        data-id="d0109dd" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <p class="elementor-heading-title elementor-size-default">
                                                                {{$v->title}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-8a954d8 elementor-widget elementor-widget-text-editor"
                                                        data-id="8a954d8" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                <p>{{$v->description}}</p>
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-700ddb56 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="700ddb56" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-730f8f18"
                                        data-id="730f8f18" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-4d9a75a9 elementor-align-center elementor-widget elementor-widget-button"
                                                    data-id="4d9a75a9" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                        @foreach ($price as $p)
                                                            @if ($p->service_id==$service->service_id)
                                                            <div class="elementor-button-wrapper">
                                                                <a href="{{route('serviceChoose',$service->service_id)}}"
                                                                    class="elementor-button-link elementor-button elementor-size-md"
                                                                    role="button">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-text">ORDER
                                                                            NOW</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            @endif
                                                        @endforeach
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-cd1d073 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="cd1d073" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9695ad1"
                                        data-id="9695ad1" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-6876646 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="6876646" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-6ea39c9 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="6ea39c9" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0095251"
                                        data-id="0095251" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-194f690 elementor-widget elementor-widget-text-editor"
                                                    data-id="194f690" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            @php
                                                            echo $service->details_quote_two
                                                            @endphp
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
                            class="elementor-section elementor-top-section elementor-element elementor-element-560ae9b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="560ae9b" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-af019bb"
                                        data-id="af019bb" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-3623b90 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="3623b90" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        @php
                        echo $service->service_values
                        @endphp
                        @php
                        echo $service->about_the_service
                        @endphp
                        @php
                        echo $service->advantage_of_the_service
                        @endphp


                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-61cbb2d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="61cbb2d" data-element_type="section">
                            <div class="container">
                                @php
                                echo $service->more_details
                                @endphp
                            </div>

                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-7459b15 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="7459b15" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8e38866"
                                        data-id="8e38866" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-e7402a3 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="e7402a3" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
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
</div>
<div class="o-slidingbar d-none d-lg-block">
    @include('front.header.quickMenu')
</div>
@include('front.footer.footer')
</div>
</div>

@endsection