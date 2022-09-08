<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand"  href="/"><img src="{{url('/uploads/logo/'.$data->logo)}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="/contact-us">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="/about-us">About us</a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <a href="tel:{{$data->mobile_no}}"> <i class="bi bi-telephone-fill"></i> {{$data->mobile_no}}</a></button>
        </div>
    </div>
</nav>









