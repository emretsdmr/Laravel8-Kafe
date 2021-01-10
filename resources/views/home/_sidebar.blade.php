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
            <li>
                @include('home._category')
            </li>
        </ul>

    </nav>
</div>
