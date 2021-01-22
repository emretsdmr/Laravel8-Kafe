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
                    <a href="{{route('home')}}">My Orders</a>
                </li>
                <li class="active">
                    <a href="{{route('user_shopcart')}}">My Shopcart</a>
                </li>
            @endauth
            <li>
                @include('home._category')
            </li>

        </ul>

    </nav>
</div>
