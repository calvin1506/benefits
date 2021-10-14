<header class="header-area header-sticky wow slideInDown blue-bg" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <nav class="navbar navbar-expand-lg" id="top-mn-headerr">
            <div class="container-fluid">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <img src="{{asset('img/logo.png')}}" alt="" class="img-fluid header-brandd" style="width:150px;">
                </a>
                <button class="navbar-toggler btn-toggle-header-mn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon_menu" style="font-size: 36px;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.home') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" style="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products <i class="arrow_carrot-down_alt2"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end" id="dropdown-menu-userr" style="background-color:#d1d1cf;">
                                {{-- <li><a class="nav-link" id="user-mn-redeem-code"><i class="fa fa-gift"></i> Redeem Voucher </a></li> --}}
                                <li><a class="nav-link" href="{{ route('user.productcash') }}">Cash Advance</a></li>
                                <li><a class="nav-link" href="{{ route('user.producttopup') }}">Topup & Bills</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link" href="{{ route('user.faq') }}">FAQs</a></li>
                        <li class="nav-item dropdown"><a class="nav-link" href="{{ route('user.faq') }}">Blog</a></li>
                        <li class="nav-item dropdown"><a class="nav-link" href="{{ route('user.about') }}">About Us</a></li>
                        <li class="nav-item dropdown"><a class="nav-link" href="{{ route('user.contact') }}">Contact</a></li>
                        <li class="nav-item dropdown"><div class="header-btn-get-started"><a href="{{ route('user.getstarted') }}" style="color:#fff;">Request Demo</a></div></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>