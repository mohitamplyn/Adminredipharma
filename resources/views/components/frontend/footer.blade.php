<div class="myfooter">
<footer class="text-center text-lg-start bg-light text-muted">
    <section class="mycolor">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        {{$data->brand_name}}     
                    </h6>
                    <p>
                        {{$data->brand_description}}
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Pages
                    </h6>
                    <p>
                        <a href="/" class="text-reset">Home</a>
                    </p>
                    <p>
                        <a href="/contact-us" class="text-reset">Contact us</a>
                    </p>
                    <p>
                        <a href="/about-us" class="text-reset">About us</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="{{$data->facebook}}" target="_blank" class="text-reset"><i class="bi bi-facebook"></i> facebook</a>
                    </p>
                    <p>
                        <a href="{{$data->instagram}}" target="_blank" class="text-reset"><i class="bi bi-instagram"></i> instagram</a>
                    </p>
                    <p>
                        <a href="{{$data->linkedin}}" target="_blank" class="text-reset"><i class="bi bi-linkedin"></i> linkedin</a>
                    </p>
                    <p>
                        <a href="{{$data->twitter}}" target="_blank" class="text-reset"><i class="bi bi-twitter"></i> twitter</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p>
                        <a href="mailto:{{$data->email}}"  class="text-reset"><i class="bi bi-envelope-open-fill"></i> {{$data->email}}</a>
                    </p>
                    <p>
                        <a href="https://goo.gl/maps/CoxubnqS7FUBuHMx9" target="_blank" class="text-reset"><i class="bi bi-geo-alt-fill"></i> {{$data->address}}</a>
                    </p>
                    <p>
                        <a href="tel:{{$data->mobile_no}}" class="text-reset"> <i class="bi bi-telephone-fill"></i> {{$data->mobile_no}}</a>
                    </p>
                </div>
            </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="#">{{$data->copyright}}</a>
    </div>
</footer>
</div>