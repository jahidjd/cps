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
                        <h1>Price Add</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('addPriceList')}}" method="POST">
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <th>Title</th>
                                    <th><input type="text" name="title" class="form-control"></th>
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
                                    <th>Simple Pckage Price</th>
                                    <th><input type="text" class="form-control" name="simple"></th>
                                    <th>Complex Pckage Price</th>
                                    <th><input type="text" class="form-control" name="complex"></th>
                                </tr>
                                <tr>
                                    <th>Advance Pckage Price</th>
                                    <th><input type="text" class="form-control" name="advance"></th>
                                    <th>Super Complex Pckage Price</th>
                                    <th><input type="text" class="form-control" name="super_complex"></th>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td><input type="submit" class="form-control btn" style="color: rgb(10, 213, 10)" value="Submit"></td>
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
                        <h1>Price List</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Service Name</th>
                                    <th>Simple Package</th>
                                    <th>Complex Package</th>
                                    <th>Advance Package</th>
                                    <th>Super Complex Package</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($price as $k=>$v)
                                    <tr>
                                        <td>{{++$k}}</td>
                                        <td>{{$v->title}}</td>
                                        <td>{{$v->service->title}}</td>
                                        <td>{{$v->simple}}</td>
                                        <td>{{$v->complex}}</td>
                                        <td>{{$v->advance}}</td>
                                        <td>{{$v->super_complex}}</td>
                                        <td>
                                            <a href="{{route('editPriceList',$v->id)}}" style="color: yellowgreen"
                                                class="btn"><i class="fas fa-edit"></i></a>
                                            <form action="{{route('deletePriceList',$v->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" style="color: red"
                                                    onclick="return confirm('Are you sure!')" class="btn"> <i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    
                                @endforelse
                            </tbody>
                        </table>
                       
                    </div>
                </div>
            </div>
        </div>

    </div>
    

</div>
@endsection