<!-- header -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="full">
                    <button type="button" id="sidebarCollapse">
                        <img src="{{ asset('assets')}}/images/menu_icon.png" alt="#">
                    </button>
                    <a class="logo" href="{{route('home')}}"><img src="{{ asset('assets')}}/images/logo.png" alt="#" /></a>
                </div>

            </div>
            <div class="col-md-9">
                <div class="full">
                    <div class="right_header_info">
                        <ul>
                            <li class="dinone"><!--Search-->
                                <div class="header-search">
                                    <form action="{{route('getproduct')}}" method="post">
                                        @csrf
                                        @livewire('search')
                                        <button type="submit" class="search-btn"></i></button>
                                    </form>
                                    @section('footerjs')
                                        @livewireScripts
                                    @endsection
                                </div>
                                <!-- /Search-->
                            </li>
                            <li class="dinone">Contact Us : <img style="margin-right: 15px;margin-left: 15px;" src="{{ asset('assets')}}/images/phone_icon.png" alt="#">{{$setting->phone}}</a></li>
                            <li class="dinone"><img style="margin-right: 15px;" src="{{ asset('assets')}}/images/mail_icon.png">: {{$setting->email}}</a></li>
                            <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="{{ asset('assets')}}/images/location_icon.png">{{$setting->address}}</a></li>
                            @auth
                                <li class="button_user"><a class="button active" href="{{route('userprofile')}}">{{Auth::user()->name}}</a>
                                <a class="button" href="{{route('logout')}}">Logout</a></li>
                            @endauth
                            @guest
                            <li class="button_user"><a class="button active" href="/login">Login</a><a class="button" href="/register">Register</a></li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
