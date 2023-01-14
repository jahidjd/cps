@extends('admin.layout.layout')
@section('body')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
     <!-- required css / js -->
     <link href="{{asset('aminAsset/assets/plugins/summernote/dist/summernote-lite.css')}}" rel="stylesheet" />
     
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
                        <h1>About Us</h1>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <form action="{{route('addAboutText')}}" method="post">
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <th>Title</th>
                                    <th colspan="2"><input type="text" name="title" class="form-control"></th>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <th colspan="2">
                                        <textarea name="description"  cols="30" rows="10"
                                        class="summernote" id="contents" title="Contents"></textarea>
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
                                    <th><input type="submit" value="Submit" class="btn form-control"
                                            style="color: greenyellow"></th>

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
                        <h1>About Section</h1>
                        <table class="table table-bordered display " id="datatableDefault">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($l as $k=>$v)
                                
                                <tr>
                                    <td>{{++$k}}</td>
                                    <td>{{$v->title}}</td>
                                    <td>
                                            @php 
                                                  echo $v->description; 
                                            @endphp
                                        {{-- { !! $v->description !! } --}}
                                        {{-- {{$v->description}} --}}
                                    </td>
                                    <td>{{$v->status}}</td>
                                    <td>
                                        <br>
                                        <a href="{{route('editAboutSection',$v->id)}}" style="color: yellowgreen"
                                            class="btn"><i class="fas fa-edit"></i></a>
                                        <form action="{{route('deleteAboutSection',$v->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" style="color: red"
                                                onclick="return confirm('Are you sure!')" class="btn"> <i
                                                    class="fas fa-trash"></i></button>
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
<script src="{{asset('aminAsset/assets/plugins/summernote/dist/summernote-lite.min.js')}}"></script>
<script>
    $('.summernote').summernote({
      height: 300
    });
  </script>

@endsection