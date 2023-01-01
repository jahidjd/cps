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
                        <h1>Add Social Media Link</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('updateSocialMedia')}}" method="post">
                            @csrf
                            <table class="table table-bordered">
                            <input type="hidden" name="id" value="{{$d->id}}">
                                <tr>
                                    <th>Facebook</th>
                                    <th><input type="text" name="facebook" class="form-control" value="{{$d->facebook}}"></th>
                                    <th>Twitter</th>
                                    <th><input type="text" name="twitter" class="form-control" value="{{$d->twitter}}"></th>
                                </tr>
                                <tr>
                                    <th>Instagram</th>
                                    <th><input type="text" name="instagram" class="form-control" value="{{$d->instagram}}"></th>
                                    <th>Pinterest</th>
                                    <th><input type="text" name="pinterest" class="form-control" value="{{$d->pinterest}}"></th>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td>
                                        <input type="submit" class="form-control btn" style="color: rgb(15, 194, 15)" value="Update" >
                                    </td>
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