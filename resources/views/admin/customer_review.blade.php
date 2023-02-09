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
                        <h1>Customer Review</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('addCustomerReview')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th><input type="text" name="name" class="form-control"></th>
                                    <th>Position</th>
                                    <th><input type="text" name="position" class="form-control"></th>
                                </tr>
                                <tr>
                                    <th>Details</th>
                                    <th colspan="3">
                                        <textarea name="details" id="" cols="15" rows="5" class="form-control"></textarea>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <th><input type="file" name="image" class="form-control"></th>
                                    <th>Status</th>
                                    <th>
                                        <select name="status" id="" class="form-control form-select">
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                        </select>
                                    </th>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td><input type="submit" class="btn form-control" style="color: rgb(11, 174, 11)"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


    

</div>
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
                        <h1>Customer Review</h1>
                        <table class="table table-bordered display " id="datatableDefault">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Details</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($c as $k=>$v)
                                <tr>
                                    <td>{{++$k}}</td>
                                    <td>{{$v->name}}</td>
                                    <td>{{$v->position}}</td>
                                    <td>{{$v->details}}</td>
                                    <td>
                                        <img src="{{url('aminAsset/image/customerReview/',$v->image)}}" alt="">
                                        
                                    </td>
                                    <td>
                                        <a href="{{route('editCustomerReview',$v->id)}}" style="color: yellowgreen" class="btn"><i class="fas fa-edit"></i></a>
                                        <form action="{{route('deleteCustomerReview',$v->id)}}" method="post">
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