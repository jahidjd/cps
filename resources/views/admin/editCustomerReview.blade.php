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
                        <form action="{{route('updateCustomerReview',$d->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th><input type="text" name="name" class="form-control" value="{{$d->name}}"></th>
                                    <th>Position</th>
                                    <th><input type="text" name="position" class="form-control" value="{{$d->position}}"></th>
                                </tr>
                                <tr>
                                    <th>Details</th>
                                    <th colspan="3">
                                        <textarea name="details" id="" cols="15" rows="5" class="form-control">{{$d->details}}</textarea>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <th>
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{url('aminAsset/image/customerReview/',$d->image)}}" alt="">
                                    </th>
                                    <th>Status</th>
                                    <th>
                                        <select name="status" id="" class="form-control form-select">
                                            <option value="{{$d->status}}">{{$d->status}}</option>
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                        </select>
                                    </th>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td><input type="submit" class="btn form-control" value="Update" style="color: rgb(11, 174, 11)"></td>
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