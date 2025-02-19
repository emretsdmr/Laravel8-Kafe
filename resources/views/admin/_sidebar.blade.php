<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            @if(Auth::user()->profile_photo_path)
                <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" width="48" height="48" alt="User" />
            @endif
        </div>
        <div class="info-container">
            @auth
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                <div class="email">{{Auth::user()->email}}</div>
            @endauth
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{route('logout')}}"><i class="material-icons">input</i>Sign Out</a></li>

                </ul>
            </div>

        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li>
                <a href="{{route('admin_category')}}">
                    <i class="material-icons">text_fields</i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin_products')}}">
                    <i class="material-icons">layers</i>
                    <span>Products</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin_setting')}}">
                    <i class="material-icons">settings</i>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin_message')}}">
                    <i class="material-icons">message</i>
                    <span>Contact Messages</span>
                </a>
            </li>
            <li>
                <a href="{{route('admin_faq')}}">
                    <i class="material-icons">question_answer</i>
                    <span>FAQs</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">attach_money</i>
                    <span>Orders</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{route('admin_orders')}}">All Orders</a>
                    </li>
                    <li>
                        <a href="{{route('admin_order_list',['status'=>'new'])}}">New Orders</a>
                    </li>
                    <li>
                        <a href="{{route('admin_order_list',['status'=>'accepted'])}}">Accepted Orders</a>
                    </li>
                    <li>
                        <a href="{{route('admin_order_list',['status'=>'rejected'])}}">Rejected Orders</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('admin_users')}}">
                    <i class="material-icons">person</i>
                    <span>Users</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->

</aside>
<!-- #END# Left Sidebar -->
