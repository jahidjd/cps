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
            <div class="col-xl-12 col-lg-12">

                <div class="card mb-12">

                    <div class="card-body">
                        <h1>Add Service Package Image</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('updateServiceImage',$serviceImage->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <table class="table table-bordered">
                                <tr>
                                    <th>Title</th>
                                    <th><input type="text" name="title" class="form-control" value="{{$serviceImage->title}}"></th>
                                    <th>Service Name</th>
                                    <th>
                                        <select name="service_id" id="" class="form-control form-select">
                                           
                                            <option value="{{$serviceImage->service->id}}">{{$serviceImage->service->title}}</option>
                                            @foreach ($service as $k=>$v)
                                            @if ($k>0)
                                            <option value="{{$v->id}}">{{$v->title}}</option>
                                            @endif
                                               
                                            @endforeach
                                        </select>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Select Package</th>
                                    <th colspan="3">
                                        <select name="package" id="" class="form-control form-select">
                                            <option value="{{$serviceImage->package}}">{{$serviceImage->package}}</option>
                                            <option value="simple">Simple</option>
                                            <option value="complex">Complex</option>
                                            <option value="advanced">Advanced</option>
                                            <option value="super_complex">Super Complex</option>
                                        </select>
                                    </th>
                                   
                                </tr>
                                <tr>
                                    <th>Slider Image</th>
                                    <th colspan="3">
                                        <img src="{{url('aminAsset/image/pricing/packageImage/',$serviceImage->slider_image)}}" width="150px" alt="">
                                        <input type="file" name="slider_image" class="form-control">
                                    </th>
                                </tr>
                                <tr>
                                    <th>Thumb Image</th>
                                    <th colspan="3">
                                        <img src="{{url('aminAsset/image/pricing/packageImage/',$serviceImage->thumb_image)}}"  alt="">
                                        <input type="file" name="thumb_image" class="form-control">
                                    </th>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <th>
                                        <select name="status" id="" class="form-control form-select">
                                            
                                            <option value="{{$serviceImage->status}}">{{$serviceImage->status}}</option>
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                            
                                        </select>
                                    </th>
                                    <th colspan="2"><input type="submit" class="btn form-control" style="color: green" value="Submit"></th>
                                </tr>
                            </table>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
   


    

</div>
@endsection