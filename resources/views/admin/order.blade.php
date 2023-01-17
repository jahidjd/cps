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
                        <h1>Orders</h1>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <table class="table table-bordered display" id="datatableDefault">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Grand Total</th>
                                   
                                    
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($d as $k=>$v)
                                    <tr>
                                        <td>{{++$k}}</td>
                                        
                                        <td>{{$v->name}}</td>
                                        <td>{{$v->email}}</td>
                                        <td>{{$v->phone}}</td>
                                        <td>{{$v->address}}</td>
                                        
                                        <td>{{$v->grand_total}}</td>
                                        
                                        <td>
                                            @if ($v->status=='pending')
                                            <a href="{{route('orderStatus',$v->id)}}"><button class="btn status" style="background-color: red; color: white" >{{$v->status}}</button></a>
                                            @elseif($v->status=='done')
                                            <button class="btn status" style="background-color: green; color: white" >Completed</button>
                                            @endif
                                            
                                            
                                        </td>
                                        <td>
                                            <a href="{{route('orderDetails',$v->id)}}" style="color: rgb(12, 247, 83)" class="btn"><i class="fa-sharp fa-solid fa-eye"></i></a>
                                            <form action="{{route('deleteOrder',$v->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" style="color: red" onclick="return confirm('Are you sure!')" class="btn"> <i class="fas fa-trash"></i></button>
                                                </form>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


    

</div>
{{-- <script>
     $(document).ready(function(){
        $('.status').on('click',function(){
            let val = $(this).val();
            if(val=='pending'){
                let id =  $('.status_id').val()
                console.log(id);
            }

        })
     })
</script> --}}
@endsection