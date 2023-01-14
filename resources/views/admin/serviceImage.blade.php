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
                        <form action="{{route('addServiceImage')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <th>Title</th>
                                    <th><input type="text" name="title" class="form-control" value=""></th>
                                    <th>Service Name</th>
                                    <th>
                                        <select name="service_id" id="" class="form-control form-select">
                                            <option value="">Select Service</option>
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
                                    <th>
                                        <select name="package" id="" class="form-control form-select">
                                            <option value="">Select Package</option>
                                            <option value="simple">Simple</option>
                                            <option value="complex">Complex</option>
                                            <option value="advanced">Advanced</option>
                                            <option value="super_complex">Super Complex</option>
                                        </select>
                                    </th>
                                    <th>Image Type</th>
                                    <th>
                                        <select name="type" id="" class="form-control form-select">
                                            <option value="">Select Image Type</option>
                                            <option value="thumb">Thumb</option>
                                            <option value="slider">Slider</option>
                                            
                                        </select>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Slider Image</th>
                                    <th colspan="3"><input type="file" name="slider_image" class="form-control"></th>
                                </tr>
                                <tr>
                                    <th>Thumb Image</th>
                                    <th colspan="3"><input type="file" name="thumb_image" class="form-control"></th>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <th>
                                        <select name="status" id="" class="form-control form-select">
                                            
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
    <div id="content" class="app-content">

        <div class="row">
            <div class="col-xl-12 col-lg-12">

                <div class="card mb-12">

                    <div class="card-body">
                        <h1>Service Image List</h1>
                        <table class="table table-bordered display " id="datatableDefault">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Service Name</th>
                                    <th>Package Name</th>
                                    <th>Slider Image</th>
                                    <th>Thumb Image</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($serviceImage as $k=>$v)
                                    <tr>
                                        <td>{{++$k}}</td>
                                        <td>{{$v->title}}</td>
                                        <td>{{$v->service->title}}</td>
                                        <td>{{$v->package}}</td>
                                        <td>
                                            <img src="{{url('aminAsset/image/pricing/packageImage/',$v->slider_image)}}" width="150px" alt="">
                                            
                                        </td>
                                        <td>
                                            <img src="{{url('aminAsset/image/pricing/packageImage/',$v->thumb_image)}}" alt="">
                                        </td>
                                        <td>{{$v->type}}</td>
                                        <td>{{$v->status}}</td>
                                        <td>
                                            <a href="{{route('editServiceImage',$v->id)}}" style="color: yellowgreen" class="btn"><i class="fas fa-edit"></i></a>
                                            <form action="{{route('deleteServiceImage',$v->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" style="color: red" onclick="return confirm('Are you sure!')" class="btn"> <i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>


    

</div>
@endsection