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
                        <h1>Update Home Slider</h1>
                       
                        {{-- <a href="" class="btn " style="color: rgb(0, 255, 21)">Slider List</a> --}}
                        <form action="{{route('updateSlider',$slider->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <table class="table table-bordered">
                                <tr>
                                    <th>Slider</th>
                                    <th>
                                        <input type="file" name="photo" class="form-control">
                                        <img src="{{url('aminAsset/image/slider/',$slider->photo)}}" alt="" width="40%" height="100px">
                                    </th>
                                    <th>Status</th>
                                    <th>
                                        <select name="status" id="" class="form-control form-select">
                                            <option value="{{$slider->status}}">{{$slider->status}}</option>
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                        </select>
                                    </th>
                                    <th><input type="submit" class="btn form-control" value="Update" style="color: rgb(18, 202, 18)"></th>

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