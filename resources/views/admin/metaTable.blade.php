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
                        <h1>MEta Form For SEO</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('updateMeta')}}" method="POST">
                            @csrf
                            @method('put')
                            <table class="table table-bordered">
                                <input type="hidden" name="id" value="{{$d->id}}">
                                <tr>
                                    <th style="width: 15%">Meta Description</th>
                                    <th colspan="3">
                                        <textarea name="meta_description" id="" cols="10" rows="5" class="form-control">{{$d->meta_description}}</textarea>
                                       
                                    </th>
                                    
                                   
                                </tr>
                                <tr>
                                    <th style="width: 15%">Meta Keyword</th>
                                    <th colspan="3">
                                        <textarea name="meta_keyword" id="" cols="10" rows="5" class="form-control">{{$d->meta_keyword}}</textarea>
                                        {{-- <input type="text" name="meta_keyword" class="form-control" value="{{$d->meta_keyword}}"> --}}
                                     </th>
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