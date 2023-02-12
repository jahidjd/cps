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
                        <h1>User Message</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Image One</th>
                                    <th>Image Two</th>
                                    <th>Image Three</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($d as $k=>$v)
                                    <tr>
                                        <td>{{++$k}}</td>
                                        <td>{{$v->name}}</td>
                                        <td>{{$v->email}}</td>
                                        <td>{{$v->phone}}</td>
                                        <td>
                                            <img src="{{url('image/contact/userImage/',$v->image_one)}}" alt="" width="20%">
                                            
                                        </td>
                                        <td>
                                            <img src="{{url('image/contact/userImage/',$v->image_two)}}" alt="" width="20%">
                                        </td>
                                        <td>
                                            <img src="{{url('image/contact/userImage/',$v->image_three)}}" alt="" width="20%">
                                        </td>
                                        <td>
                                            <button class="btn" style="background-color: red; color: white">{{$v->status}}</button>
                                            
                                        </td>
                                        <td>
                                            <form action="#" method="post">
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