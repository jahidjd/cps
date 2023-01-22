@extends('front.layout.layout')
@section('content')
<div class="l-theme-wrapper">



    <link data-minify="1" rel='preload' href='{{asset('assets/plugins/elementor/assets/css/post-10856.css?ver=1665661766')}}' data-rocket-async="style" as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />



    {{-- end link --}}
    {{-- menu start --}}
    @include('front.header.menu')
    {{-- menu end --}}
    <br><br><br><br>

    <!-- <div class="m-site-loader"></div> -->

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
        <div data-elementor-type="wp-page" data-elementor-id="10856" class="elementor elementor-10856">
            <div class="elementor-inner">
                
                <div class="elementor-section-wrap">
                    @foreach ($about as $k=>$v)
                    
                    @if ($k%2==0)
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-d68a72f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="d68a72f" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-0b9855c"
                                    data-id="0b9855c" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-bb05ecc elementor-widget elementor-widget-heading"
                                                data-id="bb05ecc" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                        {{$v->title}}</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6f4815b elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="6f4815b" data-element_type="widget"
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
                                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-2cd253f"
                                    data-id="2cd253f" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            @php
                                            echo $v->description
                                            @endphp
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @else
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-e050589 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="e050589" data-element_type="section">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-26aacef"
                                    data-id="26aacef" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-5458512 elementor-widget elementor-widget-heading"
                                                data-id="5458512" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                        {{$v->title}}</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5485d64 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="5485d64" data-element_type="widget"
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
                                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-c53ded8"
                                    data-id="c53ded8" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-f3ad8b2 elementor-widget elementor-widget-text-editor"
                                                data-id="f3ad8b2" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-text-editor elementor-clearfix">
                                                        @php
                                                        echo $v->description
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
                    @endif
                    @endforeach




                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-ec0eadd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="ec0eadd" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b5190df"
                                    data-id="b5190df" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-a49607f elementor-widget elementor-widget-heading"
                                                data-id="a49607f" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">We can
                                                        deliver</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-be454d5 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="be454d5" data-element_type="widget"
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
                                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-09e9522"
                                    data-id="09e9522" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <section
                                                class="elementor-section elementor-inner-section elementor-element elementor-element-e49a354 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="e49a354" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-416f6eb"
                                                            data-id="416f6eb" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-dddd1ac elementor-widget elementor-widget-counter"
                                                                        data-id="dddd1ac" data-element_type="widget"
                                                                        data-widget_type="counter.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-counter">
                                                                                <div
                                                                                    class="elementor-counter-number-wrapper">
                                                                                    <span
                                                                                        class="elementor-counter-number-prefix"></span>
                                                                                    <span
                                                                                        class="elementor-counter-number"
                                                                                        data-duration="2000"
                                                                                        data-to-value="400"
                                                                                        data-from-value="0"
                                                                                        data-delimiter=",">0</span>
                                                                                    <span
                                                                                        class="elementor-counter-number-suffix"></span>
                                                                                </div>
                                                                                <div class="elementor-counter-title">
                                                                                    Images Per Hour</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-78a90ac"
                                                            data-id="78a90ac" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-d214e2d elementor-widget elementor-widget-counter"
                                                                        data-id="d214e2d" data-element_type="widget"
                                                                        data-widget_type="counter.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-counter">
                                                                                <div
                                                                                    class="elementor-counter-number-wrapper">
                                                                                    <span
                                                                                        class="elementor-counter-number-prefix"></span>
                                                                                    <span
                                                                                        class="elementor-counter-number"
                                                                                        data-duration="2000"
                                                                                        data-to-value="8000"
                                                                                        data-from-value="0"
                                                                                        data-delimiter=",">0</span>
                                                                                    <span
                                                                                        class="elementor-counter-number-suffix"></span>
                                                                                </div>
                                                                                <div class="elementor-counter-title">
                                                                                    Images Per Day</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8af3b53"
                                                            data-id="8af3b53" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-d582c73 elementor-widget elementor-widget-counter"
                                                                        data-id="d582c73" data-element_type="widget"
                                                                        data-widget_type="counter.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-counter">
                                                                                <div
                                                                                    class="elementor-counter-number-wrapper">
                                                                                    <span
                                                                                        class="elementor-counter-number-prefix"></span>
                                                                                    <span
                                                                                        class="elementor-counter-number"
                                                                                        data-duration="2000"
                                                                                        data-to-value="50000"
                                                                                        data-from-value="0"
                                                                                        data-delimiter=",">0</span>
                                                                                    <span
                                                                                        class="elementor-counter-number-suffix"></span>
                                                                                </div>
                                                                                <div class="elementor-counter-title">
                                                                                    Images Per Week</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-043d75a"
                                                            data-id="043d75a" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-27d2b04 elementor-widget elementor-widget-counter"
                                                                        data-id="27d2b04" data-element_type="widget"
                                                                        data-widget_type="counter.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-counter">
                                                                                <div
                                                                                    class="elementor-counter-number-wrapper">
                                                                                    <span
                                                                                        class="elementor-counter-number-prefix"></span>
                                                                                    <span
                                                                                        class="elementor-counter-number"
                                                                                        data-duration="2000"
                                                                                        data-to-value="200000"
                                                                                        data-from-value="0"
                                                                                        data-delimiter=",">0</span>
                                                                                    <span
                                                                                        class="elementor-counter-number-suffix"></span>
                                                                                </div>
                                                                                <div class="elementor-counter-title">
                                                                                    Images Per Month</div>
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
    {{-- footer start --}}
    @include('front.footer.footer')
</div>



<script type='text/javascript' src='{{asset('assets/plugins/elementor/assets/css/jquery-numerator.min.js?ver=0.2.1')}}'
    id='jquery-numerator-js' defer></script>


@endsection
