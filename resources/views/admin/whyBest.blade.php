@extends('admin.layout.layout')
@section('body')
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
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
                        <h1>Why We best</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('updateBest',$b->id)}}" method="post" >
                            @csrf
                            @method('put')
                            <table class="table table-bordered">
                                <tr>
                                    <th>Title</th>
                                    <th>
                                        <input type="text" name="title" class="form-control" value="{{$b->title}}">
                                        
                                    </th>
                                   
                                    
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>
                                        <textarea name="description" cols="30" rows="10"
                                        class="summernote" id="contents" title="Contents">{{$b->description}}</textarea>
                                       
                                       
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" class="btn form-control" style="color: yellowgreen" value="Update"></td>
                                </tr>
                                
                            </table>
                        </form>

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