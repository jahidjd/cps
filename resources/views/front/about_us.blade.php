@extends('front.layout.layout')
@section('content')
<div class="l-theme-wrapper">
 


    <link data-minify="1" rel='preload'  href='{{asset('assets/plugins/elementor/assets/css/post-10856.css?ver=1665661766')}}' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />



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
                    @foreach ($about as $k=>$abouts)
                        @if ($k<6)
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
                                                    <h2 class="elementor-heading-title elementor-size-default">{{$abouts->title}}</h2>
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
                                                echo $abouts->description
                                            @endphp
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                        @endif
                    @endforeach
                  
                  
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



<script type='text/javascript' src='{{asset('assets/plugins/elementor/assets/css/jquery-numerator.min.js?ver=0.2.1')}}' id='jquery-numerator-js' defer></script>


@endsection
