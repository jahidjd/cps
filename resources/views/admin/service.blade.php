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
                        <h1>Service</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('addService')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <th>Title</th>
                                    <th><input type="text" name="title" class="form-control"></th>
                                    <th>Image</th>
                                    <th><input type="file" class="form-control" name="image"></th>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <th colspan="3">
                                        <textarea name="description" id="" cols="15" rows="5" class="form-control"></textarea>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <th>
                                        <select name="status" id="" class="form-control form-select">
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                        </select>
                                    </th>
                                    <th colspan="2"><input type="submit" value="Submit" class="btn form-control" style="color: greenyellow"></th>
                                    
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
                        <h1>Service Table</h1>
                        <table class="table table-bordered display " id="datatableDefault">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>{{$v[0]->title}}</td>
                                    <td>{{$v[0]->description}}</td>
                                    <td>
                                        <img src="{{url('aminAsset/image/service/',$v[0]->image)}}" alt="" width="250px">
                                    </td>
                                    <td>{{$v[0]->status}}</td>
                                    
                                    <td>
                                        <a href="{{route('editService',$v[0]->id)}}" style="color: yellowgreen" class="btn"><i class="fas fa-edit"></i></a>
                                        <form action="{{route('deleteService',$v[0]->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="color: red" onclick="return confirm('Are you sure!')" class="btn"> <i class="fas fa-trash"></i></button>
                                        </form>
                                        
                                    </td>
                                </tr>
                                @forelse ($d as $k=>$v)
                                    <tr>
                                        <td>{{++$k}}</td>
                                        <td>{{$v->title}}</td>
                                        <td>{{$v->description}}</td>
                                        <td>
                                            <img src="{{url('aminAsset/image/service/',$v->image)}}" alt="" width="250px">
                                        </td>
                                        <td>{{$v->status}}</td>
                                        
                                        <td>
                                            <a href="{{route('editServiceDetails',$v->id)}}" style="color: rgb(12, 247, 83)" class="btn"><i class="fa-sharp fa-solid fa-eye"></i></a>
                                            <a href="{{route('editService',$v->id)}}" style="color: yellowgreen" class="btn"><i class="fas fa-edit"></i></a>
                                            <form action="{{route('deleteService',$v->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" style="color: red" onclick="return confirm('Are you sure!')" class="btn"> <i class="fas fa-trash"></i></button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">Nothing added yet</td>
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