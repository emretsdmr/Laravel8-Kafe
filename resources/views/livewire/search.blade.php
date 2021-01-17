<div>
    <input wire:mode="search" name="search" type="text" class="input search-input" list="mylist" placeholder="Search food..." />

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
