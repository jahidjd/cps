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
                        <h1>Service Details Form</h1>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <form action="{{route('updateServiceDetails',$l->id)}}" method="post">
                            @csrf
                            @method('put')
                            <table class="table table-bordered">
                                <tr>
                                    <th>Service Name</th>
                                    <th colspan="2">
                                        <select name="service_id" id="" class="form-control form-select">
                                            <option value="{{$service_id->id}}">{{$service_id->title}}</option>
                                           
                                        </select>
                                        
                                    </th>
                                </tr>
                                <tr>
                                    <th>Service Details</th>
                                    <th colspan="2">
                                        <textarea name="service_details"  cols="30" rows="10"
                                        class="summernote" id="contents" title="Contents">
                                        @php
                                            echo $l->service_details
                                        @endphp
                                    </textarea>
                                        @error('service_details')
                                          <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </th>
                                </tr>
                                <tr>
                                    <th>Service Details Quotation One</th>
                                    <th colspan="2">
                                        <textarea name="details_quote_one"  cols="15" rows="5"
                                        class="summernote" id="contents" title="Contents">
                                        @php
                                            echo $l->details_quote_one
                                        @endphp
                                    </textarea>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Service Details Quotation Two</th>
                                    <th colspan="2">
                                        <textarea name="details_quote_two"  cols="15" rows="5"
                                        class="summernote" id="contents" title="Contents">
                                        @php
                                            echo $l->details_quote_two
                                        @endphp
                                       </textarea>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Service Values</th>
                                    <th colspan="2">
                                        <textarea name="service_values"  cols="15" rows="5"
                                        class="summernote" id="contents" title="Contents">
                                        @php
                                        echo $l->service_values
                                    @endphp
                                    </textarea>
                                    </th>
                                </tr>
                                <tr>
                                    <th>About The Service</th>
                                    <th colspan="2">
                                        <textarea name="about_the_service"  cols="15" rows="5"
                                        class="summernote" id="contents" title="Contents">
                                        @php
                                        echo $l->about_the_service
                                    @endphp
                                    </textarea>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Advantage of this Service</th>
                                    <th colspan="2">
                                        <textarea name="advantage_of_the_service"  cols="15" rows="5"
                                        class="summernote" id="contents" title="Contents">
                                        @php
                                        echo $l->advantage_of_the_service
                                    @endphp
                                    </textarea>
                                    </th>
                                </tr>
                                <tr>
                                    <th>More Details</th>
                                    <th colspan="2">
                                        <textarea name="more_details"  cols="15" rows="5"
                                        class="summernote" id="contents" title="Contents">
                                        @php
                                        echo $l->more_details
                                    @endphp
                                    </textarea>
                                    </th>
                                </tr>
                                <tr>
                                  <th colspan="2"></th>
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





</div>
<script src="{{asset('aminAsset/assets/plugins/summernote/dist/summernote-lite.min.js')}}"></script>
<script>
    $('.summernote').summernote({
      height: 300
    });
  </script>

@endsection