@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp

<div class="menu">
    <ul class="list">

            @foreach($parentCategories as $rs)
                <li class="active">
                    <a class="menu-toggle">{{$rs->title}}</a>
                    <ul class="ml-menu">
                        <li>
                            <div>
                                @if(count($rs->children))
                                   @include('home.categorytree',['children'=>$rs->children])
                                @endif
                            </div>
                        </li>
                    </ul>
                </li>
            @endforeach

    </ul>
</div>
