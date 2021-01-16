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
                    <a href="{{route('myprofile')}}">My Profile</a>
                </li>
                <li class="active">
                    <a href="{{route('myprofile')}}">My Orders</a>
                </li>
            @endauth
            <li>
                @include('home._category')
            </li>

        </ul>

    </nav>
</div>
