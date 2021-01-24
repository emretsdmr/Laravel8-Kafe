@foreach($children as $subcategory)
    <ul class="list">
        @if(count($subcategory->children))
            <li>{{$subcategory->title}}</li>
                <ul>
                    @include('home.categorytree',['children'=>$subcategory->$children])
                </ul>
            <hr>
        @else
            <li><a href="{{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->title,'status'=>'true'])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
