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
                        <h1>Add Home Slider</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        {{-- <a href="" class="btn " style="color: rgb(0, 255, 21)">Slider List</a> --}}
                        <form action="{{route('addSlider')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <th>Title</th>
                                    <th><input type="text" name="title" class="form-control"></th>
                                    <th>Slider</th>
                                    <th>
                                        <input type="file" name="photo" class="form-control">
                                    </th>
                                    <th>Status</th>
                                    <th>
                                        <select name="status" id="" class="form-control form-select">
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                        </select>
                                    </th>
                                    <th><input type="submit" class="btn form-control" value="Submit" style="color: rgb(18, 202, 18)"></th>

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
                        <h1>Home Slider</h1>
                        <table class="table table-bordered display " id="datatableDefault">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($slider as $k=>$s)
                                    <tr>
                                        <td>{{++$k}}</td>
                                        <td>{{$s->title}}</td>
                                        <td>
                                            <img src="{{url('aminAsset/image/slider/',$s->photo)}}" alt="" width="40%" height="100px">
                                        </td>
                                        <td>{{$s->status}}</td>
                                        <td>
                                            <a href="{{route('editSlider',$s->id)}}" style="color: yellowgreen" class="btn"><i class="fas fa-edit"></i></a>
                                        <form action="{{route('deleteSlider',$s->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="color: red" onclick="return confirm('Are you sure!')" class="btn"> <i class="fas fa-trash"></i></button>
                                        </form>
                                            
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No slider added yet</td>
                                    </tr>
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