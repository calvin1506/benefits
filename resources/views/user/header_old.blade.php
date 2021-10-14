<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown blue-bg" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <nav class="main-nav">
                <!-- ***** Logo Start ***** -->
                <a href="{{ route('user.home') }}" class="logo">
                    <img src="{{ asset('img/logo.png') }}" style="width:130px;">
                </a>
                <!-- ***** Logo End ***** -->
                <!-- ***** Menu Start ***** -->
                <ul class="nav">
                    {{-- <li class="scroll-to-section"><a href="{{ route('user.home') }}">Impact</a></li> --}}
                    <li class="scroll-to-section"><a href="{{ route('user.home') }}">Home</a></li>
                    <li class="scroll-to-section nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-top:0;">
                            Categories<b class="caret" id="carett"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li style="padding-left:5px;">
                                <a class="nav-link" href="#" style="color:black !important;">Cash Advance</a>
                            </li>
                            <li style="padding-left:5px;">
                                <a class="nav-link" href="#" style="color:black !important;">Topup & Bills</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="scroll-to-section"><a href="{{ route('user.ourmission') }}">Our Mission</a></li> --}}
                    <li class="scroll-to-section"><a href="{{ route('user.faq') }}">FAQs</a></li>
                    <li class="scroll-to-section"><a href="{{ route('user.about') }}">About Us</a></li>
                    <li class="scroll-to-section"><a href="{{ route('user.contact') }}">Contact</a></li>
                    {{-- <li class="scroll-to-section"><a href="https://blog.wagely.app/">Blog</a></li> --}}
                    {{-- <li class="scroll-to-section"><div class="header-btn-get-started"><a href="{{ route('user.getstarted') }}">Get Started</a></div></li>  --}}
                </ul>        
                <a class='menu-trigger'>
                    <span>Menu</span>
                </a>
                <!-- ***** Menu End ***** -->
            </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->