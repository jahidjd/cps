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
                        <h1>Content</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>


    

</div>
@endsection