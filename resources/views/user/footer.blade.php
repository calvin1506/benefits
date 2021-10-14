<footer class="blue-bg" style="margin-top:30px;padding-top:50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about footer-item">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('img/logo.png') }}" alt="Benefits" style="width:200px;"></a>
                        <div>
                            {{-- <span style="color: #a6dffe;">Made with&nbsp;<i class="icon_heart"></i> in Indonesia</span> --}}
                            <span style="color: orange;">
                                Nissi Bintaro Campus, Jl. Tegal Rotan Raya No. 78, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan
                            </span>
                        </div>
                    </div>
                    {{-- <a href="#">info@company.com</a> --}}
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            {{-- <div class="col-lg-3">
                <div class="services footer-item">
                    <h4>About</h4>
                    <ul>
                        <li><a href="#">Why wagely?</a></li>
                        <li><a href="#">Impact</a></li>
                        <li><a href="#">Our Mission</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-3">
                <div class="community footer-item">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="{{ route('user.home') }}">Home</a></li>
                        <li><a href="{{ route('user.productcash') }}">Product Cash Advance</a></li>
                        <li><a href="{{ route('user.producttopup') }}">Product Topup & Bills</a></li>
                        <li><a href="{{ route('user.faq') }}">FAQ</a></li>
                        <li><a href="{{ route('user.about') }}">About Us</a></li>
                        <li><a href="{{ route('user.contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="subscribe-newsletters footer-item">
                    <h4>Download</h4>
                    <ul>
                        <li>
                            <a href="https://play.google.com/store/apps/details?id=com.dataon.sunfishgo">
                                <img src="{{ asset('img/googleplaystore.svg') }}" alt="" style="width:149px;height:41px;">
                            </a>
                        </li>
                        <li>
                            <a href="https://apps.apple.com/id/app/greatday-hr/id1149720670?l=id">
                                <img src="{{ asset('img/app_store.svg') }}" alt="" style="width:149px;height:41px;">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div style="border-top:1px solid orange;margin-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-12" style="padding-top:10px;padding-bottom:10px;">
                    <div class="row">
                        <div class="col-6" style="color:orange;">
                            © Benefits 2021 All rights reserved.
                        </div>
                        <div class="col-6" style="text-align:right;">
                            <a href="#" style="color:orange;">Privacy Policy</a>
                            <span style="color:orange;">|</span>
                            <a href="#" style="color:orange;">Terms & Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>