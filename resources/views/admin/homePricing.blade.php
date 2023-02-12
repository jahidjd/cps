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
                        <h1>Home Pricing</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('addHomePricing')}}" method="post" enctype="multipart/form-data">
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
                        <h1>Home Pricing Table</h1>
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
                                    <td>0</td>
                                    <td>{{$d[0]->title}}</td>
                                    <td>{{$d[0]->description}}</td>
                                    <td></td>
                                    <td></td>
                                    <td> <a href="{{route('editHomePricing',$d[0]->id)}}" style="color: yellowgreen" class="btn"><i class="fas fa-edit"></i></a></td>
                                    
                                </tr>
                                @forelse ($d as $k=>$v)
                                   @if ($k>0)
                                   <tr>
                                    <td>{{++$k}}</td>
                                    <td>{{$v->title}}</td>
                                    <td>{{$v->description}}</td>
                                    <td>
                                        <img src="{{url('aminAsset/image/pricing/homePricingImage/',$v->image)}}" alt="" width="150px">
                                    </td>
                                    <td>{{$v->status}}</td>
                                    
                                    <td>
                                        <a href="{{route('editHomePricing',$v->id)}}" style="color: yellowgreen" class="btn"><i class="fas fa-edit"></i></a>
                                        <form action="{{route('deleteHomePricing',$v->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="color: red" onclick="return confirm('Are you sure!')" class="btn"> <i class="fas fa-trash"></i></button>
                                        </form>
                                        
                                    </td>
                                </tr>
                                   @endif
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