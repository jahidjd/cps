@extends('admin.layout.layout')
@section('body')
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<div id="app" class="app">

     @include('admin.header.header')

     @include('admin.header.menu')

    <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app"
        data-toggle-class="app-sidebar-mobile-toggled"></button>


    <div id="content" class="app-content">

        <div class="row">

            <div class="col-xl-3 col-lg-6">

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1">SITE VISITORS</span>
                            <a href="#" data-toggle="card-expand"
                                class="text-white text-opacity-50 text-decoration-none"><i
                                    class="bi bi-fullscreen"></i></a>
                        </div>


                        <div class="row align-items-center mb-2">
                            <div class="col-7">
                                <h3 class="mb-0">4.2m</h3>
                            </div>
                            <div class="col-5">
                                <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors"
                                    data-height="30"></div>
                            </div>
                        </div>


                        <div class="small text-white text-opacity-50 text-truncate">
                            <i class="fa fa-chevron-up fa-fw me-1"></i> 33.3% more than last week<br />
                            <i class="far fa-user fa-fw me-1"></i> 45.5% new visitors<br />
                            <i class="far fa-times-circle fa-fw me-1"></i> 3.25% bounce rate
                        </div>

                    </div>


                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>

                </div>

            </div>


            <div class="col-xl-3 col-lg-6">

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1">STORE SALES</span>
                            <a href="#" data-toggle="card-expand"
                                class="text-white text-opacity-50 text-decoration-none"><i
                                    class="bi bi-fullscreen"></i></a>
                        </div>


                        <div class="row align-items-center mb-2">
                            <div class="col-7">
                                <h3 class="mb-0">$35.2K</h3>
                            </div>
                            <div class="col-5">
                                <div class="mt-n2" data-render="apexchart" data-type="line" data-title="Visitors"
                                    data-height="30"></div>
                            </div>
                        </div>


                        <div class="small text-white text-opacity-50 text-truncate">
                            <i class="fa fa-chevron-up fa-fw me-1"></i> 20.4% more than last week<br />
                            <i class="fa fa-shopping-bag fa-fw me-1"></i> 33.5% new orders<br />
                            <i class="fa fa-dollar-sign fa-fw me-1"></i> 6.21% conversion rate
                        </div>

                    </div>


                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>

                </div>

            </div>


            <div class="col-xl-3 col-lg-6">

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1">NEW MEMBERS</span>
                            <a href="#" data-toggle="card-expand"
                                class="text-white text-opacity-50 text-decoration-none"><i
                                    class="bi bi-fullscreen"></i></a>
                        </div>


                        <div class="row align-items-center mb-2">
                            <div class="col-7">
                                <h3 class="mb-0">4,490</h3>
                            </div>
                            <div class="col-5">
                                <div class="mt-n3 mb-n2" data-render="apexchart" data-type="pie" data-title="Visitors"
                                    data-height="45"></div>
                            </div>
                        </div>


                        <div class="small text-white text-opacity-50 text-truncate">
                            <i class="fa fa-chevron-up fa-fw me-1"></i> 59.5% more than last week<br />
                            <i class="fab fa-facebook-f fa-fw me-1"></i> 45.5% from facebook<br />
                            <i class="fab fa-youtube fa-fw me-1"></i> 15.25% from youtube
                        </div>

                    </div>


                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>

                </div>

            </div>


            <div class="col-xl-3 col-lg-6">

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="d-flex fw-bold small mb-3">
                            <span class="flex-grow-1">BANDWIDTH</span>
                            <a href="#" data-toggle="card-expand"
                                class="text-white text-opacity-50 text-decoration-none"><i
                                    class="bi bi-fullscreen"></i></a>
                        </div>


                        <div class="row align-items-center mb-2">
                            <div class="col-7">
                                <h3 class="mb-0">4.5TB</h3>
                            </div>
                            <div class="col-5">
                                <div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Visitors"
                                    data-height="45"></div>
                            </div>
                        </div>


                        <div class="small text-white text-opacity-50 text-truncate">
                            <i class="fa fa-chevron-up fa-fw me-1"></i> 5.3% more than last week<br />
                            <i class="far fa-hdd fa-fw me-1"></i> 10.5% from total usage<br />
                            <i class="far fa-hand-point-up fa-fw me-1"></i> 2MB per visit
                        </div>

                    </div>


                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>

                </div>

            </div>



        </div>

    </div>


    <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>


   

</div>
@endsection