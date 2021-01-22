
@if (session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif
<div>
    <form class="main_form" wire:submit.prevent="store">
        @csrf
        <div class="row">
            <div class=>
                <input class="input" wire:model="subject" type="text" placeholder="Subject">
                @error('subject') <span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div>
                <textarea class="input" wire:model="review" placeholder="Your Review" type="text"></textarea>
                @error('review') <span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div>
                @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                <strong class="text-uppercase">Your Rating: </strong>
                <div>
                    <input type="radio" id="star5" wire:model="rate" value="5"/><label for="star5"></label>
                    <input type="radio" id="star4" wire:model="rate" value="4"/><label for="star4"></label>
                    <input type="radio" id="star3" wire:model="rate" value="3"/><label for="star3"></label>
                    <input type="radio" id="star2" wire:model="rate" value="2"/><label for="star2"></label>
                    <input type="radio" id="star1" wire:model="rate" value="1"/><label for="star1"></label>
                </div>
            </div>
            @auth
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <input type="submit" class="btn btn-success" value="Save"></input>
            </div>
            @else
                <a href="/login">Login for Submit Review</a>
            @endauth
        </div>
    </form>
</div>

