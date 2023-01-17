<div id="header" class="app-header">

    <div class="desktop-toggler">
        <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>


    <div class="mobile-toggler">
        <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>


    <div class="brand">
        <a href="{{route('dashboard')}}" class="brand-logo">
            <span class="brand-img">
                <span class="brand-img-text text-theme">A</span>
            </span>
            <span class="brand-text">{{$data->name}}</span>
        </a>
    </div>


    <div class="menu">
       
        <div class="menu-item dropdown dropdown-mobile-full" style="margin-left: 20px">
            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
            style="margin-right: 42px;"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
        </div>
       
        
    </div>




</div>

<script data-cfasync="false" src="{{asset('aminAsset/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="{{asset('aminAsset/assets/js/vendor.min.js')}}" type="02c80e47cfd3680c3ea95c64-text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
