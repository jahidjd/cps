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
                        <h1>Pricing Update</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('updatePricing',$v->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                           @method('put')
                            <table class="table table-bordered">
                                <tr>
                                    <th>Title</th>
                                    <th><input type="text" name="title" class="form-control" value="{{$v->title}}"></th>
                                    <th>Image</th>
                                    <th>
                                        <input type="file" class="form-control" name="image">
                                        <img src="{{url('aminAsset/image/pricing/',$v->image)}}" alt="" width="250px">
                                    </th>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <th colspan="3">
                                        <textarea name="description" id="" cols="15" rows="5" class="form-control">{{$v->description}}</textarea>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <th>
                                        <select name="status" id="" class="form-control form-select">
                                            <option value="{{$v->status}}">{{$v->status}}</option>
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                        </select>
                                    </th>
                                    <th>Button Text</th>
                                    <th><input type="text" name="button_text" class="form-control" value="{{$v->button_text}}"></th>
                                </tr>
                                <tr>
                                   <td  colspan="2"></td>
                                    <th colspan="2"><input type="submit" value="Submit" class="btn form-control" style="color: greenyellow"></th>
                                    
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