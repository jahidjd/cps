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
                        <h1>General Settings</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{route('updateGeneral',$general->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <table class="table table-bordered">
                                <tr>
                                    <th>Logo</th>
                                    <th>
                                        <input type="file" name="logo" class="form-control">
                                        <img src="{{url('aminAsset/image/logo/',$general->logo)}}" alt="" style="background-color: white">
                                    </th>
                                    <th>Card Image</th>
                                    <th>
                                        <input type="file" name="card_image" class="form-control">
                                        <img src="{{url('aminAsset/image/card_image/',$general->card_image)}}" alt="" style="background-color: white">
                                    </th>
                                    
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <th><input type="text" name="email" class="form-control" value="{{$general->email}}"></th>

                                    
                                    <th>Phone</th>
                                    <th><input type="text" name="phone" class="form-control" value="{{$general->phone}}"></th>
                                </tr>
                                <tr>
                                    <th>Bennar Text Big</th>
                                    <td colspan="3">
                                        <textarea name="bennar_text" id="" cols="10" rows="3" class="form-control">{{$general->bennar_text}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Bennar Text Small</th>
                                    <th><input type="text" name="bennar_text_small" class="form-control" value="{{$general->bennar_text_small}}"></th>
                                    <th>Home Button Text</th>
                                    <th><input type="text" name="home_button_text" class="form-control" value="{{$general->home_button_text}}"></th>
                                </tr>
                                <tr>
                                    <th>Footer Text</th>
                                    <td colspan="3">
                                        <textarea name="footer_text" id="" cols="10" rows="3" class="form-control">{{$general->footer_text}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Pricing Text</th>
                                    <td colspan="3">
                                        <textarea name="pricing_text" id="" cols="10" rows="3" class="form-control">{{$general->pricing_text}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Portfolio Text</th>
                                    <td colspan="3">
                                        <textarea name="portfolio_text" id="" cols="10" rows="3" class="form-control">{{$general->portfolio_text}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Contact Text</th>
                                    <td colspan="3">
                                        <textarea name="contact_text" id="" cols="10" rows="3" class="form-control">{{$general->contact_text}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Service Text</th>
                                    <td colspan="3">
                                        <textarea name="service_text" id="" cols="10" rows="3" class="form-control">{{$general->service_text}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>CopyRight Text</th>
                                    <td colspan="3">
                                        <textarea name="copyright_text" id="" cols="10" rows="3" class="form-control">{{$general->copyright_text}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Free Trial Text</th>
                                    <td colspan="3">
                                        <textarea name="free_trl_text" id="" cols="10" rows="3" class="form-control">{{$general->free_trl_text}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Map</th>
                                    <th colspan="4"><input type="text" name="map" class="form-control" value="{{$general->map}}"></th>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <th colspan="2"><input type="text" name="address" class="form-control" value="{{$general->address}}"></th>
                                    <td>
                                        <input type="submit" class="btn btn-success form-control"  value="Update">

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