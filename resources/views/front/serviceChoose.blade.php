<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="{{asset('assets/newAssets/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/newAssets/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/newAssets/css2?family=Livvic:wght@100;200;300;400;500&display=swap')}}" rel="stylesheet">
   
  
    <link rel="stylesheet" href="{{asset('assets/newAssets/all.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/newAssets/all.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('indexf')}}">
                <img src="{{url('aminAsset/image/logo/',$general->logo)}}" alt="Logo"
                    style="width:100px;" class="">
            </a>

            {{-- <div class="dropdown">
                <a href="http://order.theclippingpathservice.com/login" class="custom__login text-dark">Login</a>

                <a href="http://order.theclippingpathservice.com/register"
                    class="custom__register text-dark pl-3">Register</a>
                <a href="{{route('contact')}}" class="custom__login text-dark text-dark contactModalBtn"
                    style="padding-left: 11px;" data-bs-toggle="modal" data-bs-target="#quickContactModalId">
                    Contact
                </a>
            </div> --}}

        </div>
    </nav>

    <div class="container-fluid p-0">
        <form id="paymentFormId" action="" method="POST" enctype="multipart/form-data">
            <div class="row mb-5">
                <div class="col-lg-3 bg-light nav__menu__section">
                    <div class="d-flex flex-column vh-100 flex-shrink-0 p-3 mt-4 sidebar-menu ">
                        <div class="">
                            <h4> Request a Customized Order </h4>
                            <p> By following a few simple steps, you can place your customized order. In the case of
                                facing any difficulty, do contact us.</p>
                        </div>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-link-item mb-0">
                                <button id="navchoose" class="navBtn navBtn_1 nav-link active" data-id="1"
                                    aria-current="page">
                                    <b class="tab-number stepOne">1</b>
                                    <p class="teb-desc">STEP 1</p>
                                    <p class="ms-2 teb-title">CHOOSE SERVICES</p>
                                </button>
                            </li>

                            <li class="nav-link-item">
                                <span class="step-border"></span>
                            </li>

                            <li class="nav-link-item mb-0">
                                <button id="navcomments" class="navBtn navBtn_2 nav-link" disabled data-id="2">
                                    <b class="tab-number stepTwo">2</b>
                                    <p class="teb-desc">STEP 2</p>
                                    <p class="ms-2 teb-title">ADD DETAILS</p>
                                </button>
                            </li>

                            <li class="nav-link-item">
                                <span class="step-border"></span>
                            </li>

                            <li class="nav-link-item mb-0">
                                <button id="navimages" class="navBtn navBtn_3 nav-link" disabled data-id="3">
                                    <b class="tab-number stepThree">3</b>
                                    <p class="teb-desc">STEP 3</p>
                                    <p class="ms-2 teb-title">CONTACT INFORMATION</p>
                                </button>
                            </li>

                            {{-- <li class="nav-link-item">
                                <span class="step-border"></span>
                            </li> --}}

                            {{-- <li class="nav-link-item mb-0">
                                <button id="navinfo" class="navBtn navBtn_4 nav-link" disabled data-id="4">
                                    <b class="tab-number stepFour">4</b>
                                    <p class="teb-desc">STEP 4</p>
                                    <p class="ms-2 teb-title">CONTACT INFORMATION</p>
                                </button>
                            </li> --}}
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div id="choose" class="mt-5 choose__service__section">
                        <section>
                            <div class="px-2">
                                <h1>Choose Your Preferred Services</h1>
                                <p>Looking for multiple Image Editing Services at different complexity levels? Select
                                    the services you want and place your order separately.</p>
                            </div>
                            <div class="accordion" id="accordionExample">
                                @foreach ($price as $k=>$v)
                                
                                    @if ($k==0)
                                    <?php $k++ ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOnes{{$k}}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOnes{{$k}}"
                                                aria-expanded="true" aria-controls="collapseOnes{{$k}}">
                                                {{$v->service->title}}
                                                <span class="fa fa-eye icon-eye tooltip">
                                                    <span class="tooltip__text">
                                                        <div class="row tooltip__section shadow-lg">
                                                            <div class="col-md-5 tooltip__hint__image">
                                                                <img class="hint__image"
                                                                    src="http://order.theclippingpathservice.com/uploads/category/61efd28659d88-1643106950.jpg"
                                                                    width="210px">
                                                            </div>
                                                            <div class="col-md-7 tooltip__hint__text">
                                                                <p>To get hand-drawn clipping path editing, you may insert
                                                                    your images with different backgrounds and get
                                                                    high-quality pictures. Unless you make a suggestion, we
                                                                    will place the image on a white background.</p>
                                                            </div>
                                                        </div>
                                                    </span>
                                                </span>
                                            </button>
                                        </h2>
                                        <div id="collapseOnes{{$k}}" class="accordion-collapse collapse  show "
                                            aria-labelledby="headingOnes{{$k}}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                What is the complexity level of your images? If your images vary a different
                                                level of complexity, then order your service separately.
                                                <div class="row mt-3">
                                                    <div class="col-sm-6">
                                                        <div class="col">
                                                            <div class="card card-complexity my-2">
                                                                <div class="card-body">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col-auto">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="hidden" name="id" value="{{$v->id}}">
                                                                                <input type="radio"
                                                                                    onclick="displayRadioValue()"
                                                                                    name="clipping-path"
                                                                                    data-category="Clipping path"
                                                                                    data-price="{{$v->simple}}" data-name="Simple"
                                                                                    id="clipping-path_clipping-path_c15"
                                                                                    value="5"
                                                                                    class="custom-control-input deselect5 product productId clipping-path">
                                                                                <label class="custom-control-label"
                                                                                    for="clipping-path_clipping-path_c15">Simple</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto text-right">
                                                                            <span class="complexity-amount money"
                                                                                data-currency-usd="${{$v->simple}} USD"
                                                                                data-currency="USD">${{$v->simple}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2 ">
                                                                        <div
                                                                            class="col thumbnails d-flex justify-content-between">
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643100783-61efba6f491b5.png">
                                                                            </div>
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643100817-61efba91b148b.png">
                                                                            </div>
                                                                            <div class="thumbnail view-more"
                                                                                data-modal-title="Clipping path, Simple">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643100817-61efba91b148b.png">
                                                                                <div class="view-more-background"></div>
                                                                                <a href="" class="view-more-text small"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#clipping-path15">View
                                                                                    More</a>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="clipping-path15"
                                                                                    tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-xl modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    {{$v->service->title}}, Simple
                                                                                                </h5>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div id="carouselExampleIndicators5"
                                                                                                    class="carousel slide"
                                                                                                    data-bs-ride="carousel">
                                                                                                    <div
                                                                                                        class="carousel-indicators">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators5"
                                                                                                            data-bs-slide-to="0"
                                                                                                            class="active"
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators5"
                                                                                                            data-bs-slide-to="1"
                                                                                                            class=""
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators5"
                                                                                                            data-bs-slide-to="2"
                                                                                                            class=""
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                    </div>
    
                                                                                                    <div
                                                                                                        class="carousel-inner">
                                                                                                        <div
                                                                                                            class="carousel-item active">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643100950-61efbb16a1ef2.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="carousel-item ">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643100975-61efbb2f368bd.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="carousel-item ">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643100986-61efbb3a826fd.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button
                                                                                                        class="carousel-control-prev"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators5"
                                                                                                        data-bs-slide="prev">
                                                                                                        <span
                                                                                                            class="carousel-control-prev-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Previous</span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        class="carousel-control-next"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators5"
                                                                                                        data-bs-slide="next">
                                                                                                        <span
                                                                                                            class="carousel-control-next-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Next</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="col">
                                                            <div class="card card-complexity my-2">
                                                                <div class="card-body">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col-auto">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="hidden" name="id" value="{{$v->id}}">
                                                                                <input type="radio"
                                                                                    onclick="displayRadioValue()"
                                                                                    name="clipping-path"
                                                                                    data-category="Clipping path"
                                                                                    data-price="{{$v->complex}}" data-name="Complex"
                                                                                    id="clipping-path_clipping-path_c16"
                                                                                    value="6"
                                                                                    class="custom-control-input deselect6 product productId clipping-path">
                                                                                <label class="custom-control-label"
                                                                                    for="clipping-path_clipping-path_c16">Complex</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto text-right">
                                                                            <span class="complexity-amount money"
                                                                                data-currency-usd="${{$v->complex}} USD"
                                                                                data-currency="USD">${{$v->complex}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2 ">
                                                                        <div
                                                                            class="col thumbnails d-flex justify-content-between">
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643101192-61efbc08bde35.png">
                                                                            </div>
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643101221-61efbc256f6ba.png">
                                                                            </div>
                                                                            <div class="thumbnail view-more"
                                                                                data-modal-title="{{$v->service->title}}, Complex">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643101221-61efbc256f6ba.png">
                                                                                <div class="view-more-background"></div>
                                                                                <a href="" class="view-more-text small"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#clipping-path16">View
                                                                                    More</a>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade" id="clipping-path16"
                                                                                    tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-xl modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    {{$v->service->title}}, Complex
                                                                                                </h5>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div id="carouselExampleIndicators6"
                                                                                                    class="carousel slide"
                                                                                                    data-bs-ride="carousel">
                                                                                                    <div
                                                                                                        class="carousel-indicators">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators6"
                                                                                                            data-bs-slide-to="0"
                                                                                                            class="active"
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators6"
                                                                                                            data-bs-slide-to="1"
                                                                                                            class=""
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators6"
                                                                                                            data-bs-slide-to="2"
                                                                                                            class=""
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                    </div>
    
                                                                                                    <div
                                                                                                        class="carousel-inner">
                                                                                                        <div
                                                                                                            class="carousel-item active">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643101245-61efbc3d62fc1.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="carousel-item ">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643101279-61efbc5f4912e.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="carousel-item ">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643101295-61efbc6f76307.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button
                                                                                                        class="carousel-control-prev"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators6"
                                                                                                        data-bs-slide="prev">
                                                                                                        <span
                                                                                                            class="carousel-control-prev-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Previous</span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        class="carousel-control-next"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators6"
                                                                                                        data-bs-slide="next">
                                                                                                        <span
                                                                                                            class="carousel-control-next-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Next</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="col">
                                                            <div class="card card-complexity my-2">
                                                                <div class="card-body">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col-auto">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="hidden" name="id" value="{{$v->id}}">
                                                                                <input type="radio"
                                                                                    onclick="displayRadioValue()"
                                                                                    name="clipping-path"
                                                                                    data-category="Clipping path"
                                                                                    data-price="{{$v->advance}}" data-name="Advanced"
                                                                                    id="clipping-path_clipping-path_c113"
                                                                                    value="{{$v->id}}"
                                                                                    class="custom-control-input deselect13 product productId clipping-path">
                                                                                <label class="custom-control-label"
                                                                                    for="clipping-path_clipping-path_c113">Advance</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto text-right">
                                                                            <span class="complexity-amount money"
                                                                                data-currency-usd="${{$v->advance}} USD"
                                                                                data-currency="USD">${{$v->advance}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2 ">
                                                                        <div
                                                                            class="col thumbnails d-flex justify-content-between">
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643101419-61efbcebdb147.png">
                                                                            </div>
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643101428-61efbcf428770.png">
                                                                            </div>
                                                                            <div class="thumbnail view-more"
                                                                                data-modal-title="Clipping path, Complex">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643101428-61efbcf428770.png">
                                                                                <div class="view-more-background"></div>
                                                                                <a href="" class="view-more-text small"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#clipping-path113">View
                                                                                    More</a>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade"
                                                                                    id="clipping-path113" tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-xl modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    {{$v->service->title}}, Advamce
                                                                                                </h5>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div id="carouselExampleIndicators13"
                                                                                                    class="carousel slide"
                                                                                                    data-bs-ride="carousel">
                                                                                                    <div
                                                                                                        class="carousel-indicators">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators13"
                                                                                                            data-bs-slide-to="0"
                                                                                                            class="active"
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators13"
                                                                                                            data-bs-slide-to="1"
                                                                                                            class=""
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators13"
                                                                                                            data-bs-slide-to="2"
                                                                                                            class=""
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                    </div>
    
                                                                                                    <div
                                                                                                        class="carousel-inner">
                                                                                                        <div
                                                                                                            class="carousel-item active">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643101462-61efbd167d026.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="carousel-item ">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643101477-61efbd25e8ae7.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="carousel-item ">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643101518-61efbd4e6460e.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button
                                                                                                        class="carousel-control-prev"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators13"
                                                                                                        data-bs-slide="prev">
                                                                                                        <span
                                                                                                            class="carousel-control-prev-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Previous</span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        class="carousel-control-next"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators13"
                                                                                                        data-bs-slide="next">
                                                                                                        <span
                                                                                                            class="carousel-control-next-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Next</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="col">
                                                            <div class="card card-complexity my-2">
                                                                <div class="card-body">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col-auto">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="hidden" name="id" value="{{$v->id}}">
                                                                                <input type="radio"
                                                                                    onclick="displayRadioValue()"
                                                                                    name="clipping-path"
                                                                                    data-category="Clipping path"
                                                                                    data-price="{{$v->super_complex}}"
                                                                                    data-name="Super Complex"
                                                                                    id="clipping-path_clipping-path_c114"
                                                                                    value="{{$v->id}}"
                                                                                    class="custom-control-input deselect14 product productId clipping-path">
                                                                                <label class="custom-control-label"
                                                                                    for="clipping-path_clipping-path_c114">Super
                                                                                    Complex</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto text-right">
                                                                            <span class="complexity-amount money"
                                                                                data-currency-usd="${{$v->super_complex}} USD"
                                                                                data-currency="USD">${{$v->super_complex}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2 ">
                                                                        <div
                                                                            class="col thumbnails d-flex justify-content-between">
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643101584-61efbd903add5.png">
                                                                            </div>
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643101596-61efbd9c4e660.png">
                                                                            </div>
                                                                            <div class="thumbnail view-more"
                                                                                data-modal-title="Clipping path, Super Complex">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643101596-61efbd9c4e660.png">
                                                                                <div class="view-more-background"></div>
                                                                                <a href="" class="view-more-text small"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#clipping-path114">View
                                                                                    More</a>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade"
                                                                                    id="clipping-path114" tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-xl modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    {{$v->service->title}}, Super
                                                                                                    Complex</h5>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div id="carouselExampleIndicators14"
                                                                                                    class="carousel slide"
                                                                                                    data-bs-ride="carousel">
                                                                                                    <div
                                                                                                        class="carousel-indicators">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators14"
                                                                                                            data-bs-slide-to="0"
                                                                                                            class="active"
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators14"
                                                                                                            data-bs-slide-to="1"
                                                                                                            class=""
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators14"
                                                                                                            data-bs-slide-to="2"
                                                                                                            class=""
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                    </div>
    
                                                                                                    <div
                                                                                                        class="carousel-inner">
                                                                                                        <div
                                                                                                            class="carousel-item active">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643101624-61efbdb8d854d.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="carousel-item ">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643101643-61efbdcb9e41f.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="carousel-item ">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643101655-61efbdd7c1e4d.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button
                                                                                                        class="carousel-control-prev"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators14"
                                                                                                        data-bs-slide="prev">
                                                                                                        <span
                                                                                                            class="carousel-control-prev-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Previous</span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        class="carousel-control-next"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators14"
                                                                                                        data-bs-slide="next">
                                                                                                        <span
                                                                                                            class="carousel-control-next-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Next</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne{{$k}}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne{{$k}}"
                                                aria-expanded="true" aria-controls="collapseOne{{$k}}">
                                                {{$v->service->title}}
                                                <span class="fa fa-eye icon-eye tooltip">
                                                    <span class="tooltip__text">
                                                        <div class="row tooltip__section shadow-lg">
                                                            <div class="col-md-5 tooltip__hint__image">
                                                                <img class="hint__image"
                                                                    src="http://order.theclippingpathservice.com/uploads/category/61efd0b07a7f5-1643106480.jpg"
                                                                    width="210px">
                                                            </div>
                                                            <div class="col-md-7 tooltip__hint__text">
                                                                <p>This technique meets the challenge when background
                                                                    removal fails to bring satisfactory outcomes. Masking of
                                                                    images is an image processing technique to cut out fur
                                                                    or hairy edges and isolate background to offer you the
                                                                    desired look.</p>
                                                            </div>
                                                        </div>
                                                    </span>
                                                </span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne{{$k}}" class="accordion-collapse collapse "
                                            aria-labelledby="headingOne{{$k}}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                looking for Image Masking Services? Choose your preferred shadow level and
                                                place a separate order.
                                                <div class="row mt-3">
                                                    <div class="col-sm-6">
                                                        <div class="col">
                                                            <div class="card card-complexity my-2">
                                                                <div class="card-body">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col-auto">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="hidden" name="id" value="{{$v->id}}">
                                                                                <input type="radio"
                                                                                    onclick="displayRadioValue()"
                                                                                    name="image-masking"
                                                                                    data-category="Image Masking"
                                                                                    data-price="{{$v->simple}}" data-name="Simple"
                                                                                    id="clipping-path_clipping-path_c111"
                                                                                    value="{{$v->id}}"
                                                                                    class="custom-control-input deselect11 product productId image-masking">
                                                                                <label class="custom-control-label"
                                                                                    for="clipping-path_clipping-path_c111">Simple</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto text-right">
                                                                            <span class="complexity-amount money"
                                                                                data-currency-usd="${{$v->simple}} USD"
                                                                                data-currency="USD">${{$v->simple}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2 ">
                                                                        <div
                                                                            class="col thumbnails d-flex justify-content-between">
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643968989-61fcf9ddb685b.jpg">
                                                                            </div>
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643969003-61fcf9eb5682e.png">
                                                                            </div>
                                                                            <div class="thumbnail view-more"
                                                                                data-modal-title="Image Masking, Simple">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643969003-61fcf9eb5682e.png">
                                                                                <div class="view-more-background"></div>
                                                                                <a href="" class="view-more-text small"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#clipping-path111">View
                                                                                    More</a>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade"
                                                                                    id="clipping-path111" tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-xl modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    {{$v->service->title}}, Simple
                                                                                                </h5>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div id="carouselExampleIndicators11"
                                                                                                    class="carousel slide"
                                                                                                    data-bs-ride="carousel">
                                                                                                    <div
                                                                                                        class="carousel-indicators">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators11"
                                                                                                            data-bs-slide-to="0"
                                                                                                            class="active"
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators11"
                                                                                                            data-bs-slide-to="1"
                                                                                                            class=""
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                    </div>
    
                                                                                                    <div
                                                                                                        class="carousel-inner">
                                                                                                        <div
                                                                                                            class="carousel-item active">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643969101-61fcfa4d2a379.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="carousel-item ">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643969129-61fcfa6998d1d.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button
                                                                                                        class="carousel-control-prev"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators11"
                                                                                                        data-bs-slide="prev">
                                                                                                        <span
                                                                                                            class="carousel-control-prev-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Previous</span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        class="carousel-control-next"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators11"
                                                                                                        data-bs-slide="next">
                                                                                                        <span
                                                                                                            class="carousel-control-next-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Next</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="col">
                                                            <div class="card card-complexity my-2">
                                                                <div class="card-body">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col-auto">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="hidden" name="id" value="{{$v->id}}">
                                                                                <input type="radio"
                                                                                    onclick="displayRadioValue()"
                                                                                    name="image-masking"
                                                                                    data-category="Image Masking"
                                                                                    data-price="{{$v->complex}}" data-name="Complex"
                                                                                    id="clipping-path_clipping-path_c112"
                                                                                    value="{{$v->id}}"
                                                                                    class="custom-control-input deselect12 product productId image-masking">
                                                                                <label class="custom-control-label"
                                                                                    for="clipping-path_clipping-path_c112">Complex</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto text-right">
                                                                            <span class="complexity-amount money"
                                                                                data-currency-usd="${{$v->complex}} USD"
                                                                                data-currency="USD">${{$v->complex}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2 ">
                                                                        <div
                                                                            class="col thumbnails d-flex justify-content-between">
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643969388-61fcfb6ca4bd1.png">
                                                                            </div>
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643969411-61fcfb8308ce0.jpg">
                                                                            </div>
                                                                            <div class="thumbnail view-more"
                                                                                data-modal-title="Image Masking, Complex">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643969411-61fcfb8308ce0.jpg">
                                                                                <div class="view-more-background"></div>
                                                                                <a href="" class="view-more-text small"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#clipping-path112">View
                                                                                    More</a>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade"
                                                                                    id="clipping-path112" tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-xl modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    {{$v->service->title}}, Complex
                                                                                                </h5>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div id="carouselExampleIndicators12"
                                                                                                    class="carousel slide"
                                                                                                    data-bs-ride="carousel">
                                                                                                    <div
                                                                                                        class="carousel-indicators">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators12"
                                                                                                            data-bs-slide-to="0"
                                                                                                            class="active"
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators12"
                                                                                                            data-bs-slide-to="1"
                                                                                                            class=""
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                    </div>
    
                                                                                                    <div
                                                                                                        class="carousel-inner">
                                                                                                        <div
                                                                                                            class="carousel-item active">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643969477-61fcfbc56ca88.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="carousel-item ">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643969487-61fcfbcfc8c5d.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button
                                                                                                        class="carousel-control-prev"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators12"
                                                                                                        data-bs-slide="prev">
                                                                                                        <span
                                                                                                            class="carousel-control-prev-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Previous</span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        class="carousel-control-next"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators12"
                                                                                                        data-bs-slide="next">
                                                                                                        <span
                                                                                                            class="carousel-control-next-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Next</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="col">
                                                            <div class="card card-complexity my-2">
                                                                <div class="card-body">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col-auto">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="hidden" name="id" value="{{$v->id}}">
                                                                                <input type="radio"
                                                                                    onclick="displayRadioValue()"
                                                                                    name="image-masking"
                                                                                    data-category="Image Masking"
                                                                                    data-price="{{$v->advance}}" data-name="Advanced"
                                                                                    id="clipping-path_clipping-path_c116"
                                                                                    value="{{$v->id}}"
                                                                                    class="custom-control-input deselect16 product productId image-masking">
                                                                                <label class="custom-control-label"
                                                                                    for="clipping-path_clipping-path_c116">Advanced</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto text-right">
                                                                            <span class="complexity-amount money"
                                                                                data-currency-usd="${{$v->advance}} USD"
                                                                                data-currency="USD">${{$v->advance}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2 ">
                                                                        <div
                                                                            class="col thumbnails d-flex justify-content-between">
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643969671-61fcfc87a6cbb.jpg">
                                                                            </div>
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643969686-61fcfc968d09c.png">
                                                                            </div>
                                                                            <div class="thumbnail view-more"
                                                                                data-modal-title="Image Masking, Advanced">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643969686-61fcfc968d09c.png">
                                                                                <div class="view-more-background"></div>
                                                                                <a href="" class="view-more-text small"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#clipping-path116">View
                                                                                    More</a>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade"
                                                                                    id="clipping-path116" tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-xl modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    {{$v->service->title}}, Advanced
                                                                                                </h5>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div id="carouselExampleIndicators16"
                                                                                                    class="carousel slide"
                                                                                                    data-bs-ride="carousel">
                                                                                                    <div
                                                                                                        class="carousel-indicators">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators16"
                                                                                                            data-bs-slide-to="0"
                                                                                                            class="active"
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators16"
                                                                                                            data-bs-slide-to="1"
                                                                                                            class=""
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                    </div>
    
                                                                                                    <div
                                                                                                        class="carousel-inner">
                                                                                                        <div
                                                                                                            class="carousel-item active">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643969738-61fcfcca065ea.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="carousel-item ">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643969749-61fcfcd5c36aa.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button
                                                                                                        class="carousel-control-prev"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators16"
                                                                                                        data-bs-slide="prev">
                                                                                                        <span
                                                                                                            class="carousel-control-prev-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Previous</span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        class="carousel-control-next"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators16"
                                                                                                        data-bs-slide="next">
                                                                                                        <span
                                                                                                            class="carousel-control-next-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Next</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="col">
                                                            <div class="card card-complexity my-2">
                                                                <div class="card-body">
                                                                    <div class="row justify-content-between">
                                                                        <div class="col-auto">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="hidden" name="id" value="{{$v->id}}">
                                                                                <input type="radio"
                                                                                    onclick="displayRadioValue()"
                                                                                    name="image-masking"
                                                                                    data-category="Image Masking"
                                                                                    data-price="{{$v->super_complex}}"
                                                                                    data-name="Super Complex"
                                                                                    id="clipping-path_clipping-path_c128"
                                                                                    value="{{$v->id}}"
                                                                                    class="custom-control-input deselect28 product productId image-masking">
                                                                                <label class="custom-control-label"
                                                                                    for="clipping-path_clipping-path_c128">Super
                                                                                    Complex</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-auto text-right">
                                                                            <span class="complexity-amount money"
                                                                                data-currency-usd="${{$v->super_complex}} USD"
                                                                                data-currency="USD">${{$v->super_complex}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2 ">
                                                                        <div
                                                                            class="col thumbnails d-flex justify-content-between">
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643970321-61fcff11dfda1.png">
                                                                            </div>
                                                                            <div class="thumbnail">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643970328-61fcff184ad1b.png">
                                                                            </div>
                                                                            <div class="thumbnail view-more"
                                                                                data-modal-title="Image Masking, Super Complex">
                                                                                <img width="50px"
                                                                                    src="http://order.theclippingpathservice.com/uploads/product/1643970328-61fcff184ad1b.png">
                                                                                <div class="view-more-background"></div>
                                                                                <a href="" class="view-more-text small"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#clipping-path128">View
                                                                                    More</a>
                                                                                <!-- Modal -->
                                                                                <div class="modal fade"
                                                                                    id="clipping-path128" tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabel"
                                                                                    aria-hidden="true">
                                                                                    <div
                                                                                        class="modal-dialog modal-xl modal-dialog-centered">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title"
                                                                                                    id="exampleModalLabel">
                                                                                                    {{$v->service->title}}, Super
                                                                                                    Complex</h5>
                                                                                                <button type="button"
                                                                                                    class="btn-close"
                                                                                                    data-bs-dismiss="modal"
                                                                                                    aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div id="carouselExampleIndicators28"
                                                                                                    class="carousel slide"
                                                                                                    data-bs-ride="carousel">
                                                                                                    <div
                                                                                                        class="carousel-indicators">
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators28"
                                                                                                            data-bs-slide-to="0"
                                                                                                            class="active"
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                        <button
                                                                                                            type="button"
                                                                                                            data-bs-target="#carouselExampleIndicators28"
                                                                                                            data-bs-slide-to="1"
                                                                                                            class=""
                                                                                                            aria-current="true"
                                                                                                            aria-label="Slide 1"></button>
                                                                                                    </div>
    
                                                                                                    <div
                                                                                                        class="carousel-inner">
                                                                                                        <div
                                                                                                            class="carousel-item active">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643970348-61fcff2cd0519.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="carousel-item ">
                                                                                                            <img src="http://order.theclippingpathservice.com/uploads/product/1643970359-61fcff3700af6.jpg"
                                                                                                                class="d-block w-100"
                                                                                                                alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <button
                                                                                                        class="carousel-control-prev"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators28"
                                                                                                        data-bs-slide="prev">
                                                                                                        <span
                                                                                                            class="carousel-control-prev-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Previous</span>
                                                                                                    </button>
                                                                                                    <button
                                                                                                        class="carousel-control-next"
                                                                                                        type="button"
                                                                                                        data-bs-target="#carouselExampleIndicators28"
                                                                                                        data-bs-slide="next">
                                                                                                        <span
                                                                                                            class="carousel-control-next-icon"
                                                                                                            aria-hidden="true"></span>
                                                                                                        <span
                                                                                                            class="visually-hidden">Next</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                        </section>
                    </div>
                    <!-- End Choose Service -->

                    <div id="comments" style="height: 100%;" class="mt-5">
                        <section class="px-2 mb-5">
                            <h1>Add Details</h1>
                            <h1 class="mt-4">When do you need your images back?</h1>
                            <p>You can save money by choosing a longer package, or you can receive speedy delivery
                                by choosing a shorter one.</p>
                            <div class="custom-control custom-radio mt-5">
                                {{-- <p>
                                    <input type="radio" name="hourly_price" data-hour="6" id="hourly_price6" value=""
                                        data-charge="0" class="custom-control-input sixHours turnaround">
                                    <label class="custom-control-label" for="hourly_price6">6 hours – <span
                                            class="turnaround_hour_price sixHoursText money ml-1"
                                            data-currency="USD">$0.00 USD</span></label>
                                </p>
                                <p>
                                    <input type="radio" name="hourly_price" data-hour="12" id="hourly_price12" value=""
                                        data-charge="0" class="custom-control-input twelveHours turnaround">
                                    <label class="custom-control-label" for="hourly_price12">12 hours – <span
                                            class="turnaround_hour_price twelveHoursText money ml-1"
                                            data-currency="USD">$0.00 USD</span></label>
                                </p>
                                <p>
                                    <input type="radio" name="hourly_price" data-hour="24" id="hourly_price24" value=""
                                        data-charge="0" class="custom-control-input twentyFourHours turnaround" checked>
                                    <label class="custom-control-label" for="hourly_price24">24 hours – <span
                                            class="turnaround_hour_price twentyFourHoursText money ml-1"
                                            data-currency="USD">$0.00 USD</span></label>
                                </p> --}}
                                <!--<p>
                                    <input type="radio" name="hourly_price" data-hour="48" id="hourly_price48" value="" data-charge="0" class="custom-control-input fourtyEightHours turnaround">
                                    <label class="custom-control-label" for="hourly_price48">48 hours – <span class="turnaround_hour_price fourtyEightHoursText money ml-1" data-currency="USD">$0.00 USD</span></label>
                                </p>
                                <p>
                                    <input type="radio" name="hourly_price" data-hour="72" id="hourly_price72" value="" data-charge="0" class="custom-control-input seventyTwoHours turnaround">
                                    <label class="custom-control-label" for="hourly_price72">72 hours – <span class="turnaround_hour_price seventyTwoHoursText money ml-1" data-currency="USD">$0.00 USD</span></label>
                                </p>-->
                            </div>
                            <div class="mt-5">
                                <h1>Additional Service</h1>
                                {{-- <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="1" name="set_margin"
                                        id="quotation_set_margin">
                                    <label class="custom-control-label" for="quotation_set_margin">Cropping and
                                        margining</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="1" name="resize_image"
                                        id="quotation_resize_image">
                                    <label class="custom-control-label" for="quotation_resize_image">Resizing</label>
                                </div>
                                <div class="row mt-3 resizeImageSection d-none">
                                    <div class="col-md-3">
                                        <label for="resize_image_width">WIDTH (px)</label>
                                        <input type="number" min="50" name="resize_image_width" id="resize_image_width"
                                            class="form-control" placeholder="e.g. 100px">
                                    </div>

                                    <div class="col-md-3">
                                        <label for="resize_image_height">HEIGHT (px)</label>
                                        <input type="number" min="50" name="resize_image_height"
                                            id="resize_image_height" class="form-control" placeholder="e.g. 100px">
                                    </div>
                                </div> --}}

                                <h1 class="mt-5">Do you have any suggestions that you want to share with our editors?
                                </h1>
                                <div class="form-group">
                                    <label for="quotation_additional_comment">Special instruction</label>
                                    <textarea placeholder="Let us know if you have any recommended instructions."
                                        class="form-control" name="additional_comment" id="quotation_additional_comment"
                                        cols="100" rows="4" spellcheck="false"></textarea>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- End comments -->

                    <div id="upload" style="height: 100%;" class="mt-5">
                        <section class="px-2 mb-5">
                            <h1>How will we contact you?</h1>
                            <p>Put your contact information appropriately, so that we can contact you.</p>
                            <div class="row mt-5">
                                <div class="col-lg-6">
                                    <label for="first_name" class="form-label">WHAT'S YOUR FIRST NAME? <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="first_name"
                                        placeholder="Enter your first name" name="first_name" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="last_name" class="form-label">WHAT'S YOUR LAST NAME? <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="last_name"
                                        placeholder="Enter your nick name" name="last_name" required>
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <label for="phone" class="form-label">WHAT'S YOUR PHONE?</label>
                                    <input type="text" class="form-control" id="phone"
                                        placeholder="Enter your phone number" name="phone">
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <label for="email" class="form-label">WHAT'S YOUR EMAIL? <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter your email address" name="email" required>
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <label for="email" class="form-label">WHAT'S YOUR ADDRESS?</label>
                                    <input type="text" class="form-control" id="address"
                                        placeholder="Enter your address" name="address">
                                </div>

                                {{-- <div class="col-lg-12 mt-4">
                                    <h3>Payment Type</h3>
                                    <div class="form-check">
                                        <input class="form-check-input payment__type" type="radio" name="payment_type"
                                            id="paymentLater" value="payment_later" checked>
                                        <label class="form-check-label" for="paymentLater">
                                            Payment Later
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input payment__type" type="radio" name="payment_type"
                                            id="paymentPaypal" value="paypal">
                                        <label class="form-check-label" for="paymentPaypal">
                                            Paypal
                                        </label>
                                    </div>
                                </div> --}}
                            </div>
                        </section>
                    </div>

                    {{--  --}}

                    <!--<div class="next-previous-btn text-center pt-3 pb-3">
                        <button type="button" class="next-prev-btn previous__button" onclick="showPrev()"> &laquo; Previous</button>
                        <button type="button" class="next-prev-btn next__button" disabled onclick="showNext()"> Next &raquo;</button>
                    </div>-->
                </div>
                <!-- End Main 6 colum -->

                <div class="col-lg-3 pt-5 bg-light">
                    <div class="d-flex justify-content-center pb-5 mt-4">
                        <div class="rounded d-flex flex-column">
                            <div class="p-2 ml-3">
                                <h4>Order Recap</h4>
                            </div>
                            <span class="orderSection"></span>
                            <div class="p-2 d-flex">
                                <div class="col-9"><span class="order__hour__text">24 Hours</span><span
                                        class="order__hour__sign"></span></div>
                                <div class="ml-auto order__hour__charge">$0.00</div>
                            </div>
                            <div class="p-2 d-flex">
                                <div class="col-9">Subtotal- image*total
                                    <!--<span class="fa fa-question-circle text-secondary"></span>-->
                                </div>
                                <div class="ml-auto"><span class="orderImageCount">1</span>X<span
                                        class="subTotalText">$0.00</span></div>
                                <input type="hidden" name="sub_total" class="subTotalVal" id="subTotalVal" value="0">
                            </div>

                            <div class="border-top px-4 mx-3"></div>
                            <div class="p-2 d-flex pt-3">
                                <div class="col-9"><b>Grand Total</b></div>
                                <div class="ml-auto grandTotalText"><b class="green">$0.00</b></div>
                                <input type="hidden" name="grand_total" class="grandTotalVal" id="grandTotalVal"
                                    value="0">
                            </div>

                            <!--Extra hidden fields-->
                            <input type="hidden" id="productPriceMain" class="productPriceMain" value="">
                            <input type="hidden" name="product_ids" id="productIds" class="productIdsWithComma"
                                value="">
                            <input type="hidden" name="product_names" id="productNames" class="productNamesWithComma"
                                value="">
                            <input type="hidden" name="hour" class="selectedHour" id="selectedHour" value="">
                            <input type="hidden" name="order_image_type" class="order_image_type" id="order_image_type"
                                value="1">
                            <input type="hidden" name="order_image_itype" class="order_image_itype"
                                id="order_image_itype" value="">
                            <input type="hidden" name="unique_id" class="uniqueId" value="323229">
                            <input type="hidden" name="image_section_select" class="image__section__select" value="">


                            <div class="order__recap__section" style="display: none;">
                                <!--<div class="paymentSelection mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input paymentType" type="radio" name="payment_type" id="paymentLater" value="payment_later" checked>
                                        <label class="form-check-label" for="paymentLater">
                                            Payment Later
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input paymentType" type="radio" name="payment_type" id="paymentPaypal" value="paypal">
                                        <label class="form-check-label" for="paymentPaypal">
                                            Paypal
                                        </label>
                                    </div>
                                </div>-->

                                <div class="p-2 d-flex pt-3">
                                    <button type="button"
                                        class="btn orderNowBtn orderLaterBtn payment-order-btn btn-sep icon-send"
                                        style="display: none;">Order Now</button>
                                    <!--<button id="sslczPayBtn" class="btn btn-outline-danger" style="width: 100%;"
                                                token="if you have any token validation"
                                                postdata="your javascript arrays or objects which requires in backend"
                                                order="If you already have the transaction generated for current order"
                                                endpoint="">Order Now</button>-->
                                    <!--<button class="btn orderNowBtn payment-order-btn btn-sep icon-send" style="width: 100%;" disabled>Order Now</button>
                                    <button class="btn orderNowPaypalBtn payment-order-btn btn-sep icon-send" style="width: 100%; display: none;" disabled>Order Now</button>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Main 3 colum -->
            </div>
        </form>
    </div>

    <!-- Quick Contact US -->
    <div class="modal" id="quickContactModalId">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> Quick Contact Us </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form id="quickContactFormId" action="http://order.theclippingpathservice.com/contact/store"
                        method="post">
                        <input type="hidden" name="_token" value="wJtQd9ePoR4aGUTHJKq0CfmZrT4h5rnMhG8EGgVE">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3 mt-3">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                        name="name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 mt-3">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email"
                                        name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3 mt-1">
                                    <label for="comment">Massage:</label>
                                    <textarea class="form-control" rows="10" placeholder="Enter Message" id="message"
                                        name="message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick Contact US -->

    <!-- Footer -->
    <footer class="fixed-bottom col-md-8 col-sm-auto px-md-4">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="next-previous-btn text-center pt-2 pb-2">
                    <button type="button" class="next-prev-btn previous__button" onclick="showPrev()"> &laquo;
                        Previous</button>
                    <button type="button" class="next-prev-btn next__button" disabled onclick="showNext()"> Add Details
                        &raquo;</button>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <script src="http://order.theclippingpathservice.com/assets/landing/js/jquery-3.6.0.js"></script>
    <script src="http://order.theclippingpathservice.com/assets/landing/js/popper.min.js"></script>
    <script src="http://order.theclippingpathservice.com/assets/landing/js/bootstrap.js"></script>
    <script src="http://order.theclippingpathservice.com/assets/js/notify.min.js"></script>
    <script src="http://order.theclippingpathservice.com/assets/landing/js/custom.js"></script>
    <script>
    </script>
    <script>
        localStorage.setItem('sideBarMenu', 1);
    
        //---- Next Prev Button Text Change Start ----//
        $('body').on('click', '.navBtn', function (){
            let state = $(this).data('id');
            if(state === 1) {
                $('.next__button').html('Add Details &raquo;');
            }
    
            if(state === 2) {
                $('.next__button').html('Contact Details &raquo;');
            }
    
            if(state === 3) {
                $('.next__button').html('Submit Your Order &raquo;');
                $('.next__button').attr('type','submit');
                $('.next__button').attr('id','submitOrder');
                $('.orderLaterBtn').attr('type', 'submit');
    
                let selectSection = $('.order_image_itype').val();
                let imageSection = $('.sampleImageId').val();
                let dropboxLink = $('.dropbox__link').val();
                let weLink = $('.we__link').val();
                let addLink = $('.add__link').val();
                let laterComment = $('.later__comment').val();
                $(document).ready('onclick','#submitOrder',function(){
                    console.log('ok');
                })

                // if(!imageSection) {
                //     if(selectSection === 'dropbox' || selectSection === 'we_transfer' || selectSection === 'add_link' || selectSection === 'upload_later') {
                //         if(dropboxLink.length > 0 || weLink.length > 0 || addLink.length > 0 || laterComment.length > 0) {
                //             $('.next__button').removeAttr('disabled');
                //         } else {
                //             $('.next__button').attr('disabled', 'disabled');
                //             $('.orderLaterBtn').attr('type', 'button');
                //         }
                //     }
                // }
            }
    
            // if(state === 4) {
            //     $('.next__button').html('Submit Your Order &raquo;');
            //     $('.orderLaterBtn').attr('type', 'submit');
            // }
        });
        
        //console.log(state)
        //---- Next Prev Button Text Change End ----//
    
        //----Get Product Price----//
        function displayRadioValue() {
            var productIds = [];
            var productNames = [];
            var productPriceArray = [];
            var categoryArray = [];
            var categoryParentArray = [];
            var ele = document.getElementsByClassName('productId');
            for(i = 0; i < ele.length; i++) {
                if(ele[i].type="radio") {
                    if(ele[i].checked) {
                        productIds.push(ele[i].value);
                        productNames.push(ele[i].getAttribute('data-name'));
                        productPriceArray.push(ele[i].getAttribute('data-price'));
                        categoryArray.push(ele[i].getAttribute('data-category'));
                        categoryParentArray.push(ele[i].getAttribute('data-parentCat'));
                        //categoryArray.push(ele[i].name);
    
                        $('.orderNowBtn').removeAttr('disabled');
                        $('.orderNowPaypalBtn').removeAttr('disabled');
    
                        $('.navBtn_2').removeAttr('disabled');
                        $('.navBtn_3').removeAttr('disabled');
                        //$('.navBtn_4').removeAttr('disabled');
    
                        $('.next__button').removeAttr('disabled');
                        $('.step-border').css('border-left', '3px solid #02c39a');
                    }
                }
            }
    
            let productHtml = [];
            $.each(productNames, function(index, value) {
                if (categoryParentArray[index] !== null) {
                    productHtml.push('<div class="p-2 d-flex">'+
                        '<div class="col-1"><a href="javascript:void(0)" data-id="'+productIds[index]+'" data-price="'+productPriceArray[index]+'" class="removeOrderProduct removeProd'+productIds[index]+'"><i class="far fa-times-circle"></i></a></div>'+
                        '<div class="col-8">'+ categoryParentArray[index]+' ('+categoryArray[index] +') ('+ value +')</div>'+
                        '<div class="ml-auto">$'+ parseFloat(productPriceArray[index]).toFixed(2) +'</div>'+
                        '</div>');
                } else {
                    productHtml.push('<div class="p-2 d-flex">'+
                        '<div class="col-1"><a href="javascript:void(0)" data-id="'+productIds[index]+'" data-price="'+productPriceArray[index]+'" class="removeOrderProduct removeProd'+productIds[index]+'"><i class="far fa-times-circle"></i></a></div>'+
                        '<div class="col-8">'+ categoryArray[index] +' ('+ value +')</div>'+
                        '<div class="ml-auto">$'+ parseFloat(productPriceArray[index]).toFixed(2) +'</div>'+
                        '</div>');
                }
            });
            $('.orderSection').html(productHtml);
    
            let productIdsWithComma = productIds.join(',');
            let productNamesWithComma = productNames.join(',');
            let productPrice = eval(productPriceArray.join("+"));
            let totalProductPrice = parseFloat(productPrice).toFixed(2);
            $('.subTotalText').text('$'+totalProductPrice);
            $('.subTotalVal').val(totalProductPrice);
            $('.grandTotalText').text('$'+totalProductPrice);
            $('.grandTotalVal').val(totalProductPrice);
            $('.productIdsWithComma').val(productIdsWithComma);
            $('.productNamesWithComma').val(productNamesWithComma);
            $('.productPriceMain').val(totalProductPrice);
    
            //Initial Hour Section
            let sixHourDynamicValue = 4;
            let sixHoursExtra = (totalProductPrice*(sixHourDynamicValue/100)).toFixed(2);
            let sixHoursPrice = (parseFloat(totalProductPrice) + parseFloat(sixHoursExtra)).toFixed(2);
            $('.sixHours').val(sixHourDynamicValue);
            $('.sixHoursText').text('$'+sixHourDynamicValue+' USD');
            $('.sixHours').attr('data-charge', sixHourDynamicValue);
    
            let twelveHourDynamicValue = 2;
            let twelveHoursExtra = (totalProductPrice*(twelveHourDynamicValue/100)).toFixed(2);
            let twelveHoursPrice = (parseFloat(totalProductPrice) + parseFloat(twelveHoursExtra)).toFixed(2);
            $('.twelveHours').val(twelveHourDynamicValue);
            $('.twelveHoursText').text('$'+twelveHourDynamicValue+' USD')
            $('.twelveHours').attr('data-charge', twelveHourDynamicValue);
    
            let twentyFourHourDynamicValue = 0;
            let twentyFourHoursExtra;
            let twentyFourHoursPrice;
            if (twentyFourHourDynamicValue > 0) {
                twentyFourHoursExtra = (totalProductPrice*(twentyFourHourDynamicValue/100)).toFixed(2);
                twentyFourHoursPrice = (parseFloat(totalProductPrice) + parseFloat(twentyFourHoursExtra)).toFixed(2);
                $('.twentyFourHours').val(twentyFourHourDynamicValue);
                $('.twentyFourHoursText').text('$'+twentyFourHourDynamicValue+' USD');
                $('.twentyFourHours').attr('data-charge', twentyFourHourDynamicValue);
            } else {
                $('.twentyFourHours').val(0);
                $('.twentyFourHoursText').text('$'+0.00+' USD');
                $('.twentyFourHours').attr('data-charge', 0.00);
            }
    
            let fourtyEightHoursExtra = (totalProductPrice*(2.5/100)).toFixed(2);
            let fourtyEightHoursPrice = (parseFloat(totalProductPrice) - parseFloat(fourtyEightHoursExtra)).toFixed(2);
            $('.fourtyEightHours').val(fourtyEightHoursPrice);
            $('.fourtyEightHoursText').text('$'+fourtyEightHoursPrice+' USD');
            $('.fourtyEightHours').attr('data-charge', fourtyEightHoursExtra);
    
            let seventyTwoHoursExtra = (totalProductPrice*(5/100)).toFixed(2);
            let seventyTwoHoursPrice = (parseFloat(totalProductPrice) - parseFloat(seventyTwoHoursExtra)).toFixed(2);
            $('.seventyTwoHours').val(seventyTwoHoursPrice);
            $('.seventyTwoHoursText').text('$'+seventyTwoHoursPrice+' USD');
            $('.seventyTwoHours').attr('data-charge', seventyTwoHoursExtra);
    
            $('.selectedHour').val(24);
        }
        //----Get Product Price----//
    
        //----Remove Order Product----//
        $('body').on('click', '.removeOrderProduct', function (e){
           e.preventDefault();
           let price = parseFloat($(this).data('price'));
           let subTotal = parseFloat($('.subTotalVal').val());
           let grandTotal = parseFloat($('.grandTotalVal').val());
           let newSubTotal = parseFloat(subTotal - price).toFixed(2);
           let newGrandTotal = parseFloat(grandTotal - price).toFixed(2);
            $('.subTotalText').text('$'+newSubTotal);
            $('.subTotalVal').val(newSubTotal);
            $('.grandTotalText').text('$'+newGrandTotal);
            $('.grandTotalVal').val(newGrandTotal);
            $(this).parent().parent().remove();
    
            let id = $(this).data('id');
            let deselectClass = 'deselect'+id;
            $('.'+deselectClass).prop('checked', false);
    
            if(newSubTotal == 0.00) {
                $('.navBtn_2').attr('disabled', true);
                $('.navBtn_3').attr('disabled', true);
                $('.navBtn_4').attr('disabled', true);
    
                $('.next__button').attr('disabled', true);
            }
        });
        //----Remove Order Product----//
    
        //----Uncheck Checkbox----//
        $('body').on('click', '.subCategoryCheckbox', function (){
            let id = $(this).data('id');
    
            if($(this).prop("checked") == false){
                var prodClass = document.getElementsByClassName('subCheckboxProd');
                for(i = 0; i < prodClass.length; i++) {
                    if (prodClass[i].type = "radio") {
                        if (prodClass[i].checked) {
                            let removeProdClass = 'removeProd'+prodClass[i].value;
                            let price = parseFloat($('.'+removeProdClass).data('price'));
                            let subTotal = parseFloat($('.subTotalVal').val());
                            let grandTotal = parseFloat($('.grandTotalVal').val());
                            let newSubTotal = parseFloat(subTotal - price).toFixed(2);
                            let newGrandTotal = parseFloat(grandTotal - price).toFixed(2);
                            $('.subTotalText').text('$'+newSubTotal);
                            $('.subTotalVal').val(newSubTotal);
                            $('.grandTotalText').text('$'+newGrandTotal);
                            $('.grandTotalVal').val(newGrandTotal);
                            $('.'+removeProdClass).parent().parent().remove();
                        }
                    }
                }
    
                let subCategoryDeselect = 'subCategoryDeselect'+id;
                $('.'+subCategoryDeselect).each(function () {
                    $(this).prop('checked', false);
                });
            }
        });
        //----Uncheck Checkbox----//
    
    
        // ----Uncheck Radio----//
        $('body').on('change', '.subCategoryRadio', function (){
            $('.subCategoryRadio').parent().parent().siblings().find("input[type='radio']").prop('checked', false);
        });
        // ----Uncheck Radio----//
    
        //----Next Prev Button----//
        function showNext() {
           let seletcedMenu = parseInt(localStorage.getItem('sideBarMenu'));
    
            if(seletcedMenu === 3){
                let imageSection = $('.sampleImageId').val();
                let dropboxLink = $('.dropbox__link').val();
                let weLink = $('.we__link').val();
                let addLink = $('.add__link').val();
                let laterComment = $('.later__comment').val();
    
                if(imageSection) {
                    $('.next__button').removeAttr('disabled');
    
                    if (seletcedMenu >= 1 && seletcedMenu < 3) {
                        localStorage.setItem('sideBarMenu', (seletcedMenu + 1));
                        let activeClass = '.navBtn_' + (seletcedMenu + 1);
                        $(activeClass).trigger('click');
                    }
                }
    
                // if(!imageSection) {
                //     if(dropboxLink.length > 0 || weLink.length > 0 || addLink.length > 0 || laterComment.length > 0) {
                //         $('.next__button').removeAttr('disabled');
    
                //         if (seletcedMenu >= 1 && seletcedMenu < 4) {
                //             localStorage.setItem('sideBarMenu', (seletcedMenu + 1));
                //             let activeClass = '.navBtn_' + (seletcedMenu + 1);
                //             $(activeClass).trigger('click');
                //         }
                //     } else {
                //         $('.next__button').attr('disabled', 'disabled');
                //         $('.orderLaterBtn').attr('type', 'button');
                //         alert('Please upload image or given image link.');
                //     }
                // }
            } else {
                if (seletcedMenu >= 1 && seletcedMenu < 4) {
                    localStorage.setItem('sideBarMenu', (seletcedMenu + 1));
                    let activeClass = '.navBtn_' + (seletcedMenu + 1);
                    $(activeClass).trigger('click');
                }
            }
    
    
            if(seletcedMenu === 3){
                if($('#first_name').val().length > 0 && $('#last_name').val().length > 0 && $('#email').val().length > 0) {
                    $('.next__button').html('Processing...');
                    let payFormData = $('#paymentFormId').serialize();
                    // console.log(payFormData);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "/serviceAdd",
                        method: 'POST',
                        type: 'POST',
                        data: payFormData,
                        dataType: 'json',
                        success: function (data) {
                            $.notify(data.status, "success");
                            if(data.status=='success'){
                                $('#paymentFormId')[0].reset();
                            }
                            
                            // console.log(data);
                            setTimeout(function() {
                                $.notify(data.status, "success");
                                
                            }, 1000);
                        },
                        error: function (data) {
                            $.notify("Cannot create order.", "error");
                        }
                    });
                } else {
                    alert('Please fill contact information.');
                }
            }
        }
    
        function showPrev() {
            let seletcedMenu = parseInt(localStorage.getItem('sideBarMenu'));
    
            if(seletcedMenu === 4){
                let imageSection = $('.sampleImageId').val();
                let dropboxLink = $('.dropbox__link').val();
                let weLink = $('.we__link').val();
                let addLink = $('.add__link').val();
                let laterComment = $('.later__comment').val();
    
                if(imageSection) {
                    $('.next__button').removeAttr('disabled');
    
                    if (seletcedMenu > 1 && seletcedMenu <= 4) {
                        localStorage.setItem('sideBarMenu', (seletcedMenu - 1));
                        let activeClass = '.navBtn_' + (seletcedMenu - 1);
                        $(activeClass).trigger('click');
                    }
                }
    
                // if(!imageSection) {
                //     if(dropboxLink.length > 0 || weLink.length > 0 || addLink.length > 0 || laterComment.length > 0) {
                //         $('.next__button').removeAttr('disabled');
    
                //         if (seletcedMenu > 1 && seletcedMenu <= 4) {
                //             localStorage.setItem('sideBarMenu', (seletcedMenu - 1));
                //             let activeClass = '.navBtn_' + (seletcedMenu - 1);
                //             $(activeClass).trigger('click');
                //         }
                //     } else {
                //         $('.next__button').attr('disabled', 'disabled');
                //         $('.orderLaterBtn').attr('type', 'button');
    
                //         if (seletcedMenu > 1 && seletcedMenu <= 4) {
                //             localStorage.setItem('sideBarMenu', (seletcedMenu - 1));
                //             let activeClass = '.navBtn_' + (seletcedMenu - 1);
                //             $(activeClass).trigger('click');
                //         }
                //     }
                // }
            } else {
                $('.next__button').removeAttr('disabled');
                if (seletcedMenu > 1 && seletcedMenu <= 4) {
                    localStorage.setItem('sideBarMenu', (seletcedMenu - 1));
                    let activeClass = '.navBtn_' + (seletcedMenu - 1);
                    $(activeClass).trigger('click');
                }
            }
        }
        //----Next Prev Button----//
    
        $('body').on('click', '.navBtn', function (){
            let id = $(this).data('id');
            localStorage.setItem('sideBarMenu', id);
        })
    
        $(document).ready(function (){
            //----Get Hourly Price Calculation----//
            $('body').on('change', '.turnaround', function (e){
                e.preventDefault();
                let selectedHour = $(this).data('hour');
                let hourCharge = $(this).data('charge');
                let prevSubTotal = parseFloat($('.productPriceMain').val());
                let newSubTotal = (prevSubTotal + parseFloat($(this).val())).toFixed(2);
                let imageCount = parseFloat($('.image__count').val());
                let totalAmount = (newSubTotal * imageCount).toFixed(2);
                $('.selectedHour').val(selectedHour);
                $('.subTotalText').text('$'+newSubTotal);
                $('.subTotalVal').val(newSubTotal);
    
                $('.grandTotalText').text('$'+totalAmount);
                $('.grandTotalVal').val(totalAmount);
    
                $('.order__hour__text').text(selectedHour +' Hours');
                $('.order__hour__charge').text('$'+ parseFloat(hourCharge).toFixed(2));
    
                if(selectedHour == 6 || selectedHour == 12){
                    $('.order__hour__sign').text(' (+)');
                }
    
                if(selectedHour == 24){
                    $('.order__hour__sign').text('');
                }
    
                if(selectedHour == 48 || selectedHour == 72){
                    $('.order__hour__sign').text(' (-)');
                }
            });
            //----Get Hourly Price Calculation----//
    
            //----Resize Image Section----//
            $('body').on('change', '#quotation_resize_image', function (e){
                e.preventDefault();
                const checked = $(this).is(':checked');
                if(checked === true) {
                    $('.resizeImageSection').removeClass('d-none');
                } else {
                    $('.resizeImageSection').addClass('d-none');
                }
            });
            //----Resize Image Section----//
    
            // ----Image Section----//
            $('body').on('click', '.orderImageType', function (e){
                e.preventDefault();
                $('.order_image_type').val($(this).data('type'));
                $('.order_image_itype').val($(this).data('itype'));
            });
            //----Image Section----//
    
            //----No of Image----//
            let incrementPlus;
            let incrementMinus;
    
            incrementPlus = $(".addImage").click(function() {
                let $n = $(this)
                    .siblings(".no-of-edit-image");
                $n.val(Number($n.val())+1 );
    
                let subTotalPrice = parseFloat($('.subTotalVal').val());
                let finalGrandTotalPrice = parseFloat(subTotalPrice * Number($n.val())).toFixed(2);
                $('.grandTotalVal').val(finalGrandTotalPrice);
                $('.grandTotalText').text('$'+finalGrandTotalPrice);
                $('.orderImageCount').text(Number($n.val()));
            });
    
            incrementMinus =  $(".subImage").click(function() {
                let $n = $(this)
                    .siblings(".no-of-edit-image");
                let amount = Number($n.val());
                if (amount > 1) {
                    $n.val(amount-1);
    
                    let grandTotalPrice = parseFloat($('.grandTotalVal').val());
                    let subTotalPrice = parseFloat($('.subTotalVal').val());
                    let finalGrandTotalPrice = parseFloat(grandTotalPrice - subTotalPrice).toFixed(2);
                    $('.grandTotalVal').val(finalGrandTotalPrice);
                    $('.grandTotalText').text('$'+finalGrandTotalPrice);
                    $('.orderImageCount').text(Number($n.val()));
                }
            });
    
            $('body').on('keyup', '#noOfEditImage', function (){
                let imgQty = parseFloat($(this).val());
                let subTotalPrice = parseFloat($('.subTotalVal').val());
                let grandTotalPrice = parseFloat($('.grandTotalVal').val());
                let finalAmount = parseFloat(imgQty * subTotalPrice).toFixed(2);
                $('.grandTotalVal').val(finalAmount);
                $('.grandTotalText').text('$'+finalAmount);
                $('.orderImageCount').text(imgQty);
            });
            //----No of Image----//
    
            //----Sample Image Upload----//
            $('body').on('change', '.fileUploadImage', function (e){
                e.preventDefault();
                $(".fileUploadProgressBar").css('display', 'block');
                let uniqueId = $('.uniqueId').val();
                var files = $('#file')[0].files;
                var percentage = '0';
    
                if(files.length > 0) {
                    var formData = new FormData();
                    formData.append('file', files[0]);
                    formData.append('size', files[0].size);
                    formData.append('unique_id', uniqueId);
    
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        xhr: function() {
                            var xhr = new window.XMLHttpRequest();
                            xhr.upload.addEventListener("progress", function(evt){
                                if (evt.lengthComputable) {
                                    var percentage = evt.loaded / evt.total;
                                    percentage = parseInt(percentage * 100);
                                    $('.progress .progress-bar').css("width", percentage+'%', function() {
                                        return $(this).attr("aria-valuenow", percentage) + "%";
                                    })
                                }
                            }, false);
    
                            return xhr;
                        },
                        url: "/serviceAdd",
                        method: 'POST',
                        data: formData,
                        dataType: 'json',
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (data) {
                            console.log(data);
                            // let sizeKb = ((data.size) / 1000).toFixed(2);
                            // let path = "http://order.theclippingpathservice.com/uploads/sample-image";
                            // let imageName = path+'/'+data.name;
                            // let image = "<img src="+imageName+" width='100px'>";
                            // $('.sample-image-section').append('<tr class="delete_row_'+data.id+'">'+
                            //     '<td width="50%">'+image+'</td>'+
                            //     '<td>'+sizeKb+' KB</td>'+
                            //     '<td class="text-center">'+
                            //     '<button data-id="'+data.id+'" class="btn btn-danger btn-sm deleteSampleImage">Delete</button>'+
                            //     '<input type="hidden" name="sample_id[]" id="sampleImageId" class="sampleImageId" value="'+data.id+'">'+
                            //     '</td>'+
                            //     '</tr>');
    
                            // $('.image__section__select').val(1);
                            // $('.navBtn_4').removeAttr('disabled');
                            // $('.next__button').removeAttr('disabled');
                            
                            // //Total Image Count
                            // let uploadImagesArray = [];
                            // $('.sampleImageId').each(function () {
                            //     uploadImagesArray.push($(this).val());
                            // });
    
                            // let totalUploadImage = uploadImagesArray.length;
                            // if (totalUploadImage > 0) {
                            //     $('.addImage').attr('disabled', 'disabled');
                            //     $('.subImage').attr('disabled', 'disabled');
                            //     $('.image__count').attr('readonly', 'true');
                            //     $('.image__count').val(totalUploadImage);
                            //     $('.orderImageCount').text(totalUploadImage);
    
                            //     let subTotalPrice = parseFloat($('.subTotalVal').val());
                            //     let finalAmount = parseFloat(totalUploadImage * subTotalPrice).toFixed(2);
                            //     $('.grandTotalVal').val(finalAmount);
                            //     $('.grandTotalText').text('$'+finalAmount);
                            // } else {
                            //     $('.addImage').removeAttr('disabled');
                            //     $('.subImage').removeAttr('disabled');
                            //     $('.image__count').removeAttr('readonly');
                            //     $('.image__count').val(1);
                            //     $('.orderImageCount').text(1);
                            // }
    
                            // setTimeout(function() {
                            //     let percentage = 0;
                            //     $('.progress .progress-bar').css("width", percentage+'%', function() {
                            //         return $(this).attr("aria-valuenow", percentage) + "%";
                            //     })
                            //     $('#file').val(null);
                            //     $('#fileUploadForm').trigger("reset");
                            //     $(".fileUploadProgressBar").css('display', 'none');
                            // }, 1000);
                        },
                        error: function (data) {
                            console.log(data);
                        }
                    });
                }
            });
    
            // $('body').on('click', '.deleteSampleImage', function (e){
            //    e.preventDefault();
            //    let id = $(this).data('id');
            //    let el = $(this);
            //     $.ajax({
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         },
            //         url: "http://order.theclippingpathservice.com/sample/file/delete",
            //         method: 'POST',
            //         data: {'id': id},
            //         success: function (data) {
            //             let deleteRow = '.delete_row_'+id;
            //             $(deleteRow).remove();
    
            //             let imageSection = $('.sampleImageId').val();
            //             let dropboxLink = $('.dropbox__link').val();
            //             let weLink = $('.we__link').val();
            //             let addLink = $('.add__link').val();
            //             let laterComment = $('.later__comment').val();
    
            //             if(imageSection) {
            //                 $('.next__button').removeAttr('disabled');
            //                 $('.navBtn_4').removeAttr('disabled');
                            
            //                 //Total Image Count
            //                 let uploadImagesArray = [];
            //                 $('.sampleImageId').each(function () {
            //                     uploadImagesArray.push($(this).val());
            //                 });
    
            //                 let totalUploadImage = uploadImagesArray.length;
            //                 if (totalUploadImage > 0) {
            //                     $('.addImage').attr('disabled', 'disabled');
            //                     $('.subImage').attr('disabled', 'disabled');
            //                     $('.image__count').attr('readonly', 'true');
            //                     $('.image__count').val(totalUploadImage);
            //                     $('.orderImageCount').text(totalUploadImage);
    
            //                     let subTotalPrice = parseFloat($('.subTotalVal').val());
            //                     let finalAmount = parseFloat(totalUploadImage * subTotalPrice).toFixed(2);
            //                     $('.grandTotalVal').val(finalAmount);
            //                     $('.grandTotalText').text('$'+finalAmount);
            //                 } else {
            //                     $('.addImage').removeAttr('disabled');
            //                     $('.subImage').removeAttr('disabled');
            //                     $('.image__count').removeAttr('readonly');
            //                     $('.image__count').val(1);
            //                     $('.orderImageCount').text(1);
            //                 }
            //             }
    
            //             if(!imageSection) {
            //                 if(dropboxLink.length > 0 || weLink.length > 0 || addLink.length > 0 || laterComment.length > 0) {
            //                     $('.next__button').removeAttr('disabled');
            //                     $('.navBtn_4').removeAttr('disabled');
            //                 } else {
            //                     $('.navBtn_4').attr('disabled', 'disabled');
            //                     $('.next__button').attr('disabled', 'disabled');
            //                 }
            //             }
            //         },
            //         error: function (data) {
            //             console.log(data);
            //         }
            //     });
            // });
    
            $('body').on('keyup', '.image__link__comment', function (){
                let link = $(this).val();
                let selectSection = $('.order_image_itype').val();
                let imageSection = $('.sampleImageId').val();
                let dropboxLink = $('.dropbox__link').val();
                let weLink = $('.we__link').val();
                let addLink = $('.add__link').val();
                let laterComment = $('.later__comment').val();
                if(imageSection) {
                    $('.image__section__select').val(1);
                    $('.navBtn_4').removeAttr('disabled');
                    $('.next__button').removeAttr('disabled');
                }
    
                // if(!imageSection) {
                //     if(selectSection === 'dropbox' || selectSection === 'we_transfer' || selectSection === 'add_link' || selectSection === 'upload_later') {
                //         if(dropboxLink.length > 0 || weLink.length > 0 || addLink.length > 0 || laterComment.length > 0) {
                //             $('.image__section__select').val(1);
                //             $('.navBtn_4').removeAttr('disabled');
                //             $('.next__button').removeAttr('disabled');
                //         } else {
                //             let seletcedMenu = parseInt(localStorage.getItem('sideBarMenu'));
                //             if(seletcedMenu === 3) {
                //                 $('.image__section__select').val('');
                //                 $('.navBtn_4').attr('disabled', 'disabled');
                //                 $('.next__button').attr('disabled', 'disabled');
                //                 alert('Please upload image or given image link.');
                //             } else {
                //                 $('.image__section__select').val(1);
                //                 $('.navBtn_4').removeAttr('disabled');
                //                 $('.next__button').removeAttr('disabled');
                //             }
                //         }
                //     }
                // }
            });
            //----Sample Image Upload----//
    
            //----Payment Type----//
            // $('body').on('change', '.paymentType', function (){
            //     let paymentType = $(this).prop("checked", true).val();
            //     if(paymentType === 'paypal'){
            //         $('.orderNowPaypalBtn').css('display', 'block');
            //         $('.orderNowBtn').css('display', 'none');
            //     }else{
            //         $('.orderNowPaypalBtn').css('display', 'none');
            //         $('.orderNowBtn').css('display', 'block');
            //     }
            // });
            //----Payment Type----//
    
            //----Paypal Payment----//
            $('body').on('click', '.orderNowPaypalBtn', function (e){
               e.preventDefault();
               alert('Service not available');
            });
            //----Paypal Payment----//
    
            //----Step Checking Section----//
            $('body').on('click', '.navBtn_2', function (e){
                e.preventDefault();
                let productLength = $('#productIds').val().length;
                if(productLength > 0) {
                    $('.stepOne').html(' ');
                    $('.stepOne').addClass('tab-icon fa fa-check');
                } else {
                    $('.stepOne').html(1);
                    $(this).attr('disabled', true);
                }
            });
    
            $('body').on('click', '.navBtn_3', function (e){
                e.preventDefault();
                $('.stepTwo').html(' ');
                $('.stepTwo').addClass('tab-icon fa fa-check');
            });
    
            $('body').on('click', '.navBtn_4', function (e){
                e.preventDefault();
                $('.stepThree').html(' ');
                $('.stepThree').addClass('tab-icon fa fa-check');
            });
    
            $('body').on('keyup', '#first_name', function (e){
                e.preventDefault();
                checkUserInfo();
            });
    
            $('body').on('keyup', '#last_name', function (e){
                e.preventDefault();
                checkUserInfo();
            });
    
            $('body').on('keyup', '#email', function (e){
                e.preventDefault();
                checkUserInfo();
            });
    
            function checkUserInfo() {
                $('body').on('click', '.navBtn_4', function (e){
                e.preventDefault();
                $('.stepThree').html(' ');
                })
            }
            //----Step Checking Section----//
    
            //----Payment Gateway----//
            // let obj = {};
            // function changeObj() {
            //     obj.hourly_price = $('#hourly_price').val();
            //     obj.set_margin = $('#quotation_set_margin').val();
            //     obj.resize_image = $('#quotation_resize_image').val();
            //     obj.resize_image_width = $('#resize_image_width').val();
            //     obj.resize_image_height = $('#resize_image_height').val();
            //     obj.additional_comment = $('#quotation_additional_comment').val();
            //     obj.no_of_edit_image = $('#noOfEditImage').val();
            //     obj.link = $('#link').val();
            //     obj.comment = $('#comment').val();
            //     obj.sub_total = $('#subTotalVal').val();
            //     obj.grand_total = $('#grandTotalVal').val();
            //     obj.product_id = $('#productIds').val();
            //     obj.product_name = $('#productNames').val();
            //     obj.hour = $('#selectedHour').val();
            //     obj.first_name = $('#first_name').val();
            //     obj.last_name = $('#last_name').val();
            //     obj.phone = $('#phone').val();
            //     obj.email = $('#email').val();
            //     obj.address = $('#address').val();
            // }
            //
            // $('#hourly_price').change(function (){
            //    changeObj();
            // });
            //
            // $('#quotation_set_margin').change(function (){
            //     changeObj();
            // });
            //
            // $('#quotation_resize_image').change(function (){
            //     changeObj();
            // });
            //
            // $('#resize_image_width').change(function (){
            //     changeObj();
            // });
            //
            // $('#resize_image_height').change(function (){
            //     changeObj();
            // });
            //
            // $('#quotation_additional_comment').change(function (){
            //     changeObj();
            // });
            //
            // $('#noOfEditImage').change(function (){
            //     changeObj();
            // });
            //
            // $('#link').change(function (){
            //     changeObj();
            // });
            //
            // $('#comment').change(function (){
            //     changeObj();
            // });
            //
            // $('#subTotalVal').change(function (){
            //     changeObj();
            // });
            //
            // $('#grandTotalVal').change(function (){
            //     changeObj();
            // });
            //
            // $('#productIds').change(function (){
            //     changeObj();
            // });
            //
            // $('#productNames').change(function (){
            //     changeObj();
            // });
            //
            // $('#selectedHour').change(function (){
            //     changeObj();
            // });
            //
            // $('#first_name').change(function (){
            //     changeObj();
            // });
            //
            // $('#last_name').change(function (){
            //     changeObj();
            // });
            //
            // $('#phone').change(function (){
            //     changeObj();
            // });
            //
            // $('#email').change(function (){
            //     changeObj();
            // });
            //
            // $('#address').change(function (){
            //     changeObj();
            // });
            //
            // $('#sslczPayBtn').prop('postdata', obj);
            // (function (window, document) {
            //     var loader = function () {
            //         var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            //         // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            //         script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
            //         tag.parentNode.insertBefore(script, tag);
            //     };
            //
            //     window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
            // })(window, document);
            //----Payment Gateway----//
        });
    </script>
</body>

</html>