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
                        <h1>Client Company Logo</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('updateCDL',$c->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <table class="table table-bordered">
                                <tr>
                                    <th>Title</th>
                                    <th><input type="text" name="title" class="form-control" value="{{$c->title}}"></th>
                                    <th>Image</th>
                                    <th>
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{url('aminAsset/image/clientsLogo/',$c->image)}}" alt="">
                                    </th>
                                </tr>
                                
                                <tr>
                                    
                                    <th>Status</th>
                                    <th>
                                        <select name="status" id="" class="form-control form-select">
                                            <option value="{{$c->status}}">{{$c->status}}</option>
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                        </select>
                                    </th>
                                    <td colspan="2"><input type="submit" class="btn form-control" value="Update" style="color: rgb(11, 174, 11)"></td>
                                </tr>
                                
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