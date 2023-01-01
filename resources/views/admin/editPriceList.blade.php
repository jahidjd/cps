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
                        <h1>Price Update</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('updatePriceList',$price->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <table class="table table-bordered">
                                <tr>
                                    <th>Title</th>
                                    <th><input type="text" name="title" class="form-control" value="{{$price->title}}"></th>
                                    <th>Service Name</th>
                                    <th>
                                        <select name="service_id" id="" class="form-control form-select">
                                            <option value="{{$price->service_id}}">{{$price->service->title}}</option>
                                            @foreach ($service as $v)
                                            @if ($k>0)
                                            <option value="{{$v->id}}">{{$v->title}}</option>
                                          @endif
                                            @endforeach
                                        </select>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Simple Pckage Price</th>
                                    <th><input type="text" class="form-control" name="simple" value="{{$price->simple}}"></th>
                                    <th>Complex Pckage Price</th>
                                    <th><input type="text" class="form-control" name="complex" value="{{$price->complex}}"></th>
                                </tr>
                                <tr>
                                    <th>Advance Pckage Price</th>
                                    <th><input type="text" class="form-control" name="advance" value="{{$price->advance}}"></th>
                                    <th>Super Complex Pckage Price</th>
                                    <th><input type="text" class="form-control" name="super_complex" value="{{$price->super_complex}}"></th>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td><input type="submit" class="form-control btn" style="color: rgb(10, 213, 10)" value="Update"></td>
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