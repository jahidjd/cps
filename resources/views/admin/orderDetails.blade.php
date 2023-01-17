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
                        <h1>User Message</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Service Category</th>
                                    <th>Service Name</th>
                                    <th>Order Date</th>
                                   
                                    
                                   
                                    
                                    <th>Status</th>
                                    
                                   
                                </tr>
                                
                                        
                                    
                                
                            </thead>
                            <tbody>
                                @foreach ($price as $k=>$v)
                                    <tr>
                                        <td>{{$k}}</td>
                                        
                                        <td>{{$d->name}}</td>
                                        <td>{{$v->service->title}}</td>
                                        <td>{{$ars[$k]}}</td>
                                        <td>{{$d->created_at}}</td>
                                       
                                        
                                        
                                        <td>
                                            @if ($d->status=='pending')
                                            <a href="{{route('orderStatus',$d->id)}}"><button class="btn status" style="background-color: red; color: white" >{{$d->status}}</button></a>
                                            @elseif($d->status=='done')
                                            <button class="btn status" style="background-color: green; color: white" >Completed</button>
                                            @endif
                                            {{-- <button class="btn" style="background-color: red; color: white">{{$d->status}}</button> --}}
                                            
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                <tr style="background-color: rgb(130, 130, 27); color:black">
                                    <th colspan="5" style="text-align: end">Total Price</th>
                                    <th>{{$d->grand_total}}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


    

</div>
@endsection