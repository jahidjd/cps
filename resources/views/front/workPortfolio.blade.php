@extends('front.layout.layout')
@section('content')


<link data-minify="1" rel='preload' href='{{asset('assets/plugins/elementor/assets/css/post-10598.css?ver=1665658971')}}' data-rocket-async="style" as="style"
    onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
<style>
    @media (min-width:1730px) {

        /* your conditional / responsive CSS inside this condition */

        .orderLeft {
            margin-left: -210%;
        }

    }
    @media (max-width: 2500px) {

        /* your conditional / responsive CSS inside this condition */
        .btnSm{
            margin-top: -150px;
        }
          

    }
    @media (max-width: 763px) {

        /* your conditional / responsive CSS inside this condition */
        .btnSm{
            margin-top: 0px;
        }
          

    }

    @media (min-width:1706px) {

        /* your conditional / responsive CSS inside this condition */

        .orderLeft {
            margin-left: -206%;
            ;
        }

        .titleLeft {
            margin-top: -96%;
        }

        .imageLeft {
            margin-top: -91.7%;
        }

        .buttonLeft {
            margin-right: -215%;
            margin-top: -27%;
        }

        .butonRight {
            margin-top: 0%;
            margin-left: -210%;
        }


    }

    @media (max-width:1698px) {

        /* your conditional / responsive CSS inside this condition */

        .orderLeft {
            margin-left: -206%;
            ;
        }

        .titleLeft {
            margin-top: -96%;
        }

        .imageLeft {
            margin-top: -91.7%;
        }

        .buttonLeft {
            margin-right: -215%;
            margin-top: -27%;
            /* width: 100%; */
        }

        .butonRight {
            margin-top: 0%;


        }
    }

    @media (max-width:765px) {

        /* your conditional / responsive CSS inside this condition */

        .orderLeft {
            margin-left: 0%;
        }

        .titleLeft {
            margin-top: auto;
        }

        .imageLeft {
            margin-top: auto;
        }

        .buttonLeft {
            margin-top: 0%;
            ;
            margin-right: auto;
            margin-left: -105%;
        }

        .butonRight {
            margin-top: 0%;
            margin-left: 0%


        }
        

    }
</style>


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
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
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
                                                    <h1 class="elementor-heading-title elementor-size-default">
                                                        {{$general->portfolio_text}}</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @foreach ($works as $k=>$v)
                    @if ($k%2==0)
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
                                                    <h3 class="elementor-heading-title elementor-size-default">
                                                        {{$v->title}}</h3>
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
                                                {{-- <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">
                                                        {{$v->title}}</h3>
                                                </div> --}}
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
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/works/',$v->image)}}"
                                                            class="attachment-full size-full wp-image-15091"
                                                            alt="{{$v->title}}"
                                                            data-lazy-srcset="{{url('aminAsset/image/works/',$v->image)}} 561w, {{url('aminAsset/image/works/',$v->image)}} 300w"
                                                            data-lazy-sizes="(max-width: 561px) 100vw, 561px"
                                                            data-lazy-src="{{url('aminAsset/image/works/',$v->image)}}" /><noscript><img
                                                                decoding="async" width="561" height="370"
                                                                src="{{url('aminAsset/image/works/',$v->image)}}"
                                                                class="attachment-full size-full wp-image-15091"
                                                                alt="{{$v->title}}"
                                                                srcset="{{url('aminAsset/image/works/',$v->image)}} 561w, {{url('aminAsset/image/works/',$v->image)}} 300w"
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
                                                    {{-- <div class="elementor-image">
                                                        <img decoding="async" width="561" height="370"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/works/',$v->image)}}"
                                                            class="attachment-large size-large wp-image-15096"
                                                            alt="{{$v->title}}"
                                                            data-lazy-srcset="{{url('aminAsset/image/works/',$v->image)}} 561w, {{url('aminAsset/image/works/',$v->image)}} 300w"
                                                            data-lazy-sizes="(max-width: 561px) 100vw, 561px"
                                                            data-lazy-src="{{url('aminAsset/image/works/',$v->image)}}" /><noscript><img
                                                                decoding="async" width="561" height="370"
                                                                src="{{url('aminAsset/image/works/',$v->image)}}"
                                                                class="attachment-large size-large wp-image-15096"
                                                                alt="{{$v->title}}"
                                                                srcset="{{url('aminAsset/image/works/',$v->image)}} 561w, {{url('aminAsset/image/works/',$v->image)}} 300w"
                                                                sizes="(max-width: 561px) 100vw, 561px" /></noscript>
                                                    </div> --}}
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
                                                    @foreach ($price as $p)
                                                    @if ($p->service_id==$v->service_id)
                                                    <div class="elementor-button-wrapper ">
                                                    <a href="{{route('serviceChoose',$v->service_id)}}"
                                                        class="elementor-button-link elementor-button elementor-size-lg"
                                                        role="button">
                                                        <span class="elementor-button-content-wrapper ">
                                                            <span class="elementor-button-text">Order Now</span>
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
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4c7492d"
                                    data-id="4c7492d" data-element_type="column">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-element-e1b3394 elementor-button-info elementor-align-center elementor-widget elementor-widget-button"
                                                data-id="e1b3394" data-element_type="widget"
                                                data-widget_type="button.default">
                                               
                                                   

                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @else
                    {{-- TT --}}
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
                                                {{-- <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">
                                                        {{$v->title}}</h3>
                                                </div> --}}
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
                                                <div class="elementor-widget-container titleLeft">
                                                    <h3 class="elementor-heading-title elementor-size-default">
                                                        {{$v->title}}</h3>
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
                                                    {{-- <div class="elementor-image">
                                                        <img decoding="async" width="561" height="370"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/works/',$v->image)}}"
                                                            class="attachment-full size-full wp-image-15091"
                                                            alt="{{$v->title}}"
                                                            data-lazy-srcset="{{url('aminAsset/image/works/',$v->image)}} 561w, {{url('aminAsset/image/works/',$v->image)}} 300w"
                                                            data-lazy-sizes="(max-width: 561px) 100vw, 561px"
                                                            data-lazy-src="{{url('aminAsset/image/works/',$v->image)}}" /><noscript><img
                                                                decoding="async" width="561" height="370"
                                                                src="{{url('aminAsset/image/works/',$v->image)}}"
                                                                class="attachment-full size-full wp-image-15091"
                                                                alt="{{$v->title}}"
                                                                srcset="{{url('aminAsset/image/works/',$v->image)}} 561w, {{url('aminAsset/image/works/',$v->image)}} 300w"
                                                                sizes="(max-width: 561px) 100vw, 561px" /></noscript>
                                                    </div> --}}
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
                                                    <div class="elementor-image imageLeft">
                                                        <img decoding="async" width="561" height="370"
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='{{url('aminAsset/image/works/',$v->image)}}"
                                                            class="attachment-large size-large wp-image-15096"
                                                            alt="{{$v->title}}"
                                                            data-lazy-srcset="{{url('aminAsset/image/works/',$v->image)}} 561w, {{url('aminAsset/image/works/',$v->image)}} 300w"
                                                            data-lazy-sizes="(max-width: 561px) 100vw, 561px"
                                                            data-lazy-src="{{url('aminAsset/image/works/',$v->image)}}" /><noscript><img
                                                                decoding="async" width="561" height="370"
                                                                src="{{url('aminAsset/image/works/',$v->image)}}"
                                                                class="attachment-large size-large wp-image-15096"
                                                                alt="{{$v->title}}"
                                                                srcset="{{url('aminAsset/image/works/',$v->image)}} 561w, {{url('aminAsset/image/works/',$v->image)}} 300w"
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
                                                    @foreach ($price as $p)
                                                        @if ($p->service_id==$v->service_id)
                                                        <div class="elementor-button-wrapper " >
                                                            <a href="{{route('serviceChoose',$v->service_id)}}"
                                                                class="elementor-button-link elementor-button elementor-size-lg btnSm"
                                                                role="button" style="position: absolute;
                                                              
                                                                margin-left: -60px;">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">Order Now</span>
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
                    {{-- TT --}}
                    @endif
                    @endforeach




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
