<div class="sidebar">
    <!-- Sidebar  -->
    <nav id="sidebar">

        <div id="dismiss">
            <i class="fa fa-arrow-left"></i>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="{{route('home')}}">Home</a>
            </li>
            @auth
                <li class="active">
                    <a href="{{route('userprofile')}}">My Profile</a>
                </li>
                <li class="active">
                    <a href="{{route('user_orders')}}">My Orders</a>
                </li>
                <li class="active">
                    <a href="{{route('user_shopcart')}}">My Shopcart</a>
                </li>
            @endauth
            <li>
                @include('home._category')
            </li>
            @auth
                @php
                    $userRoles=Auth::user()->roles->pluck('name');
                @endphp
                @if($userRoles->contains('admin'))
                    <li class="active">
                        <a href="{{route('admin_home')}}" target="_blank">Admin Panel</a>
                    </li>
                @endif
            @endauth
        </ul>
    </nav>
</div>
