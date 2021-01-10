@php
    $parentCategories=\App\Http\Controllers\HomeController::categoryList()
@endphp

<div class="category-nav">
    <span class="category-header">Categories</span>
    <ul>
        @foreach($parentCategories as $rs)
            <li>
                <a>{{$rs->title}}</a>
                <div class="custom-menu">
                    <div class="row">
                        @if(count($rs->children))
                            @include('home.categorytree',['children'=>$rs->children])
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
