<!-- footer -->
<footer>
    <div class="footer">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="footer_logo">
                        <a href="{{route('home')}}"><img src="{{ asset('assets')}}/images/logo.png" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="lik">
                        <li class="active"> <a href="{{route('home')}}">Home</a></li>
                        <li> <a href="{{route('aboutus')}}">About</a></li>
                        <li> <a href="{{route('references')}}">References</a></li>
                        <li> <a href="{{route('fag')}}">FAQ</a></li>
                        <li> <a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="new">
                        <h3>Newsletter</h3>
                        <form class="newtetter">
                            <input class="tetter" placeholder="Your email" type="text" name="Your email">
                            <button class="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>© 2021 All Rights Reserved | {{$setting->company}} </p>
                <p>@if($setting->instagram!=null)<a href="{{$setting->instagram}}" target="_blank"><img src="{{ asset('assets')}}/images/igseffaf.bmp" /></a>@endif
                   @if($setting->facebook!=null)<a href="{{$setting->facebook}}" target="_blank"><img src="{{ asset('assets')}}/images/fbseffaf.bmp" /></a>@endif
                   @if($setting->twitter!=null)<a href="{{$setting->twitter}}" target="_blank"><img src="{{ asset('assets')}}/images/twseffaf.bmp" /></a></p>@endif
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->

</div>
</div>
<div class="overlay"></div>
<!-- Javascript files-->
<script src="{{ asset('assets')}}/js/jquery.min.js"></script>
<script src="{{ asset('assets')}}/js/popper.min.js"></script>
<script src="{{ asset('assets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{ asset('assets')}}/js/custom.js"></script>
<script src="{{ asset('assets')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="{{ asset('assets')}}/js/jquery-3.0.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function() {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>

<style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
</style>


<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }
        })
    })
</script>
