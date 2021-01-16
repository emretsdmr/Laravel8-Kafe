<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{asset('assets')}}/admin/images/user.png" width="48" height="48" alt="User" />
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

        </ul>
    </div>
    <!-- #Menu -->

</aside>
<!-- #END# Left Sidebar -->
