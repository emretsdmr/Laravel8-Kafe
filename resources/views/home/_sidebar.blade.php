<div class="sidebar">
    <!-- Sidebar  -->
    <nav id="sidebar">

        <div id="dismiss">
            <i class="fa fa-arrow-left"></i>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="{{route('home')}}">Anasayfa</a>
            </li>
            @auth
                <li class="active">
                    <a href="{{route('profile.show')}}">Profilim</a>
                </li>
                <li class="active">
                    <a href="{{route('user_orders')}}">Siparişlerim</a>
                </li>
                <li class="active">
                    <a href="{{route('user_shopcart')}}">Sepetim</a>
                </li>
            @endauth
            <li class="active">
                <a href="#">Menü</a>
            </li>
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
