@extends('user.master')

@section('header')
<style>
    .cont-top-seamless{
        background-color: #fafbfc;
        /* transition: background .3s,border .3s,border-radius .3s,box-shadow .3s;
        margin-top: 0;
        margin-bottom: 0;
        padding: 120px 0 71px; */
    }
    .cont-cal{
        box-shadow: 0 20px 60px 0 rgb(0 11 40 / 6%);
        margin: 0 20px 0 0;
        padding: 50px 40px 38px;
        margin-top: 30px;
        margin-bottom: 90px;
    }
    .cont-item-less-stress{
        box-shadow: 0 3px 10px 0 rgb(38 59 94 / 10%);
        height: 100%;
        padding: 30px 15px;
    }
    .cont-item-less-stress:hover{
        box-shadow: 0 30px 60px 0 rgb(38 59 94 / 10%);
    }
    .cont-item-less-stress h2{
        font-size: 20px;
        color: #263b5e;
        padding: 30px 0 20px 0;
    }
    .cont-item-less-stress p{
        color: #6a7695;
        font-size: 16px;
    }
    .cont-turn-financial h2{
        color: #212d39;
        font-family: poppins,Sans-serif;
        font-size: 32px;
        font-weight: 600;
    }
    .cont-turn-financial .home-btn-get-started{
        padding: 10px 35px;
        border-radius: 45px;
        background: #22affd;
        color: #fff;
        display: inline-block;
        margin-top: 30px;
    }
    .cont-turn-financial .home-btn-get-started:hover{
        border: 1px solid #22affd;
        color: #22affd;
        background: transparent;
        cursor: pointer;
    }
    .home-seam-number{
        padding: 4px 12px;
        width: 33px;
        height: 33px;
        text-align: center;
        font-size: 16px;
        /* color: #5f51fb;
        border: 1px solid #5f51fb; */
        border-radius: 50%;
        margin: 0 auto;
        line-height: 26px;
        -webkit-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear;
        z-index: 1;
        position: relative;
        color: #fff;
        background: #22affd;
        border-color: #22affd;
    }
    /* .home-seam-number:hover{
        box-shadow: 0 0 70px 0 rgb(0 0 0 / 50%);
        cursor: pointer;
    } */
    .cont-top-seamless .col-lg-4:first-child .home-separator {
        display: none;
    }
    .cont-top-seamless .separator {
        position: absolute;
        top: 15px;
        width: 100%;
        background: #ededed;
        height: 1px;
        left: -51%;
        z-index: 0;
    }
    .home-seam-item{
        margin-top: 50px;
        border-radius: 4px;
        padding: 50px;
        text-align: center;
    }
    .cont-home-seam-item:hover > .home-seam-item{
        box-shadow: 0 20px 60px 0 rgb(0 11 40 / 6%);
        cursor: pointer;
    }
    .cont-home-seam-item:hover > .home-seam-number {
        box-shadow: 0 0 70px 0 rgb(0 0 0 / 50%);
        cursor: pointer;
    }
    .nav-tabs{
        border-bottom: none;
        justify-content: center !important;
    }
    .nav-tabs .nav-link.active{
        border: none;
        /* #22affd */
        background-color: orange;
        border-radius: 45px;
    }
    #form-contact input, #form-contact textarea{
        border-radius: 4px;
        width: 100%;
        padding: 7px;
        margin-bottom: 15px;
        margin-top: 15px;
    }
    .accordion-body{
        color: #677294;
    }
    input[type=range] {
        height: 38px;
        -webkit-appearance: none;
        margin: 10px 0;
        width: 100%;
        background: transparent;
    }
    input[type=range]:focus {
        outline: none;
    }
    input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 10px;
        cursor: pointer;
        animate: 0.2s;
        box-shadow: 1px 1px 0px #000000;
        background: #FF9F40;
        border-radius: 5px;
        border: 1px solid #000000;
    }
    input[type=range]::-webkit-slider-thumb {
        box-shadow: 1px 1px 1px #000000;
        border: 1px solid #000000;
        height: 30px;
        width: 10px;
        border-radius: 5px;
        background: #FFA836;
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -11px;
    }
    input[type=range]:focus::-webkit-slider-runnable-track {
        background: #FF9F40;
    }
    input[type=range]::-moz-range-track {
        width: 100%;
        height: 10px;
        cursor: pointer;
        animate: 0.2s;
        box-shadow: 1px 1px 0px #000000;
        background: #FF9F40;
        border-radius: 5px;
        border: 1px solid #000000;
    }
    input[type=range]::-moz-range-thumb {
        box-shadow: 1px 1px 1px #000000;
        border: 1px solid #000000;
        height: 30px;
        width: 10px;
        border-radius: 5px;
        background: #FFA836;
        cursor: pointer;
    }
    input[type=range]::-ms-track {
        width: 100%;
        height: 10px;
        cursor: pointer;
        animate: 0.2s;
        background: transparent;
        border-color: transparent;
        color: transparent;
    }
    input[type=range]::-ms-fill-lower {
        background: #FF9F40;
        border: 1px solid #000000;
        border-radius: 10px;
        box-shadow: 1px 1px 0px #000000;
    }
    input[type=range]::-ms-fill-upper {
        background: #FF9F40;
        border: 1px solid #000000;
        border-radius: 10px;
        box-shadow: 1px 1px 0px #000000;
    }
    input[type=range]::-ms-thumb {
        margin-top: 1px;
        box-shadow: 1px 1px 1px #000000;
        border: 1px solid #000000;
        height: 30px;
        width: 10px;
        border-radius: 5px;
        background: #FFA836;
        cursor: pointer;
    }
    input[type=range]:focus::-ms-fill-lower {
        background: #FF9F40;
    }
    input[type=range]:focus::-ms-fill-upper {
        background: #FF9F40;
    }
    .parallax {
        /* The image used */
        background-image: url('img/img_parallax.jpg');

        /* Set a specific height */
        min-height: 500px;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .parallax2 {
        /* The image used */
        background-image: url('img/img_parallax3.jpg');

        /* Set a specific height */
        min-height: 500px;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    #owl-demoo .owl-dots .owl-dot, #owl-demoo-new .owl-dots .owl-dot {
        width: 6px;
        height: 6px;
        background-color: orange;
        border-radius: 50%;
        opacity: 0.3;
        margin: 0px 5px;
    }
    #owl-demoo .owl-dots .active, #owl-demoo-new .owl-dots .active {
        opacity: 1;
        width: 10px;
        height: 10px;
    }
    #owl-demoo .owl-dots, #owl-demoo-new .owl-dots {
        text-align: center;
        /* margin-top: 40px; */
    }
    #owl-demoo .owl-nav{
        visibility: hidden;
    }

    .img-rot {
        /* position: absolute; */
        top: 50%;
        left: 50%;
        /* width: 120px;
        height: 120px; */
        /* margin:-60px 0 0 -60px; */
        -webkit-animation:spin 4s linear infinite;
        -moz-animation:spin 4s linear infinite;
        animation:spin 4s linear infinite;
    }
    @-moz-keyframes spin { 100% { -moz-transform: rotate3d(0, 1, 0.5, 3.142rad); } }
    @-webkit-keyframes spin { 100% { -webkit-transform: rotate3d(0, 1, 0.5, 3.142rad); } }
    @keyframes spin { 100% { -webkit-transform: rotate3d(0, 1, 0.5, 3.142rad); transform:rotate3d(0, 1, 0.5, 3.142rad); } }


    .animated  {
    -webkit-animation-duration : 1000 ms  ;
    animation-duration : 1000 ms  ;
    -webkit-animation-fill-mode : both  ;
    animation-fill-mode : both  ;
    }  
    /* .owl-animated-out - only for current item */ 
    /* This is very important class. Use z-index if you want move Out item above In item */ 
    .owl-animated-out {
    z-index : 1 
    }
    /* .owl-animated-in - only for upcoming item
    /* This is very important class. Use z-index if you want move In item above Out item */ 
    .owl-animated-in {
    z-index : 0 
    }
    /* .fadeOut is style taken from Animation.css and this is how it looks in owl.carousel.css:  */ 
    .fadeOut  {
    -webkit-animation-name : fadeOut  ;
    animation-name : fadeOut  ;
    }  
    @-webkit-keyframes  fadeOut  {
    0% {
        opacity : 1   ;
    }  
    100% {
        opacity : 0   ;
    }  
    }
    @keyframes  fadeOut  {
    0% {
        opacity : 1   ;
    }  
    100% {
        opacity : 0   ;
    }  
    }


    #pro-list li{
        list-style-type: circle;
        height: 40px;
    }
    /* #owl-demoo .owl-item .item{
        height: auto;
    }
    #owl-demoo .owl-item .item img {
        vertical-align: middle;
    } */
    /* #owl-demoo .owl-stage{
        display: flex;
    }
    #owl-demoo .owl-stage .owl-item {
        display: flex;
        flex: 1 0 auto;
        height: 100%;
    }
    #owl-demoo .owl-stage .owl-item .item {
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: stretch;
    } */
    #owl-demoo .owl-stage{
        display: flex;
    }
    #owl-demoo .owl-item{
        display: flex;
        vertical-align: center;
    }
</style>
@endsection



@section('content')
{{-- <div class="main-banner" id="top"></div> --}}
<div class="blue-bg" style="padding-top:100px;padding-bottom:100px;">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 style="font-weight: 700;">Gajian Lebih Awal dengan benefits by Greatday HR</h1>
                <p style="padding-top:50px;">
                    Tinggalkan pinjaman dan bunga beresiko, karena dengan Benefits by GreatDay HR, tarik gaji dan pembayaran online dapat dilakukan dengan mudah kapan saja, dimana saja.
                </p>
                <div style="padding-top:30px;">
                    <a href="https://play.google.com/store/apps/details?id=com.dataon.sunfishgo">
                        <img src="{{ asset('img/googleplaystore.svg') }}" alt="" style="width:200px;margin-right:20px;margin-bottom:10px;">
                    </a>
                    <a href="https://apps.apple.com/id/app/greatday-hr/id1149720670?l=id">
                        <img src="{{ asset('img/app_store.svg') }}" alt="" style="width:220px;">
                    </a>
                </div>
            </div>
            <div class="col-4 text-center">
                {{-- <img class="img-rot" src="{{ asset('img/Benefits UI.png') }}" alt="" style="width:90%;"> --}}
                <div class="owl-carousel owl-theme" id="owl-demo-layer1">
                    <div class="item">
                        <img src="{{ asset('img/Benefits UI.png') }}" style="width:90%;">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/Benefits UI.png') }}" style="width:90%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-8" style="padding-top:70px;padding-bottom:30px;">
                <h2 style="padding-bottom:30px;">Jumlah Pengguna Pinjol Meningkat 134% Pada Tahun 2020</h2>
                <h3 style="padding-bottom:30px;">Bunga yang diberikan bisa sampai 30% per bulan</h3>
                <p>
                    Lindungi karyawan Anda dari pinjaman bunga tinggi karena mereka adalah aset yang berharga. <br>
                    Berikan kemudahan tarik gaji kapan saja tanpa biaya pada perusahaan.
                </p>
            </div>
            <div class="col-4 text-center" style="padding-top:70px;">
                <img class="" src="{{ asset('img/Cash Advance UI 02.png') }}" alt="" style="width:60%;">
            </div>


            <div class="col-12 text-center" style="padding-top:70px;padding-bottom:30px;">
                <h1>Saving calculator</h1>
                {{-- <h4 style="color:#6a7695;margin-top:40px;">Significant savings on administrative expenses and working capital</h4> --}}
            </div>

            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-6">
                <div class="cont-cal" style="min-height:200px;background-color:#c9c8c5;border-radius:10px;width:100%;">
                {{-- <p>Calculation</p> --}}
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Karyawan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Perusahaan</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div>
                                <div style="text-align:right;" id="append-hari-masuk">1</div>
                                <input type="range" min="1" max="10" id="hari-masuk" value="1">
                            </div>
                            <div>
                                <div style="text-align:right;" id="append-total-kerja">1</div>
                                <input type="range" min="1" max="30" id="total-kerja" value="1">
                            </div>
                            <div>
                                <div style="text-align:right;" id="append-gaji">1.000.000</div>
                                <input type="range" min="1000000" max="6000000" step="100000" id="gaji" value="1000000">
                            </div>
                            <div>
                                Rp. <div id="append-total-tarik" style="display:inline-block;">1.000.000</div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div>
                                <div style="text-align:right;" id="append-jumlah-karyawan">20</div>
                                <input type="range" min="1" max="20" id="jumlah-karyawan" value="20">
                            </div>
                            <div>
                                <div style="text-align:right;" id="append-rata">Rp. 1.000.000</div>
                                <input type="range" min="1000000" max="6000000" step="100000" id="rata" value="1000000">
                            </div>
                            <div>
                                <div style="text-align:right;" id="append-persentase">20%</div>
                                <input type="range" min="1" max="20" id="persentase" value="20">
                            </div>
                            <div>
                                Rp. <div id="append-total-tarik-perusahaan" style="display:inline-block;">4.000.000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3"></div>
        </div>
    </div>
</div>

<div class="blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-8" style="padding-top:50px;padding-bottom:50px;">
                <h2 style="padding-bottom:30px;">Bagaimana Cash Advance Dapat Membantu Anda?</h2>

                <ul id="pro-list">
                    <li>Produktivitas Lebih Tinggi</li>
                    <li>Meningkatkan Recruitment</li>
                    <li>Menurunkan Turnover</li>
                    <li>Tinggi Mengganggu Cash Flow Perusahaan</li>
                    <li>Real-Time Transfer ke Rekening Bank</li>
                    <li>Safety Net Bagi Karyawan</li>
                </ul>
            </div>
            <div class="col-4 text-center" style="padding-top:50px;">
                <img class="img-rot" src="{{ asset('img/Cash Advance UI 02.png') }}" alt="" style="width:170px;">
            </div>

            {{-- <div class="col-4 text-center" style="padding-bottom:50px;">
                <img src="{{ asset('img/Cash Advance UI 02.png') }}" alt="" style="width:60px;">
                <p>Produktivitas Lebih Tinggi</p>
            </div>
            <div class="col-4 text-center" style="padding-bottom:30px;">
                <img src="{{ asset('img/Cash Advance UI 02.png') }}" alt="" style="width:60px;">
                <p>Meningkatkan Recruitment</p>
            </div>
            <div class="col-4 text-center" style="padding-bottom:30px;">
                <img src="{{ asset('img/Cash Advance UI 02.png') }}" alt="" style="width:60px;">
                <p>Menurunkan Turnover</p>
            </div>
            <div class="col-4 text-center" style="padding-bottom:30px;">
                <img src="{{ asset('img/Cash Advance UI 02.png') }}" alt="" style="width:60px;">
                <p>Tidak Mengganggu Cash Flow Perusahaan</p>
            </div>
            <div class="col-4 text-center" style="padding-bottom:30px;">
                <img src="{{ asset('img/Cash Advance UI 02.png') }}" alt="" style="width:60px;">
                <p>Real-Time Transfer ke Rekening Bank</p>
            </div>
            <div class="col-4 text-center" style="padding-bottom:30px;">
                <img src="{{ asset('img/Cash Advance UI 02.png') }}" alt="" style="width:60px;">
                <p>Safety Net Bagi Karyawan</p>
            </div> --}}
        </div>
    </div>
</div>

<div class="">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="padding-top:50px;padding-bottom:50px;">
                <h2>Our Service</h2>
            </div>
            <div class="col-6" style="padding-top:50px;padding-bottom:50px;text-align:center;">
                <iframe width="1584" height="375" style="max-width:100%;" src="https://www.youtube.com/embed/DdSrgJBT6Ss" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-6" style="padding-top:50px;padding-bottom:50px;text-align:center;">
                <iframe width="1584" height="375" style="max-width:100%;" src="https://www.youtube.com/embed/8k1yoRAk2jw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
            </div>
        </div>
    </div>
</div>

<div style="background-color: #ededed;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="padding-top:50px;padding-bottom:50px;">
                {{-- <h2>Testimoni Pengguna</h2> --}}
                <h2>Our Happy Customer</h2>
            </div>
            <div class="col-12" style="padding-top:50px;padding-bottom:50px;">
                <div class="owl-carousel owl-theme" id="owl-demoo">
                    <div class="item">
                        <img src="{{ asset('img/pratama_abadi-removebg-preview.png') }}" >
                        
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/90121659776Logo_Mobirent-removebg-preview.png') }}" >
                        
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/kopi_hang_tuah-removebg-preview.png') }}" >
                        
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/dataon-removebg-preview.png') }}" >
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="" style="padding-top:100px;padding-bottom:100px;">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 style="font-weight: 700;">Upcoming Event</h1>
                <h5 style="padding-top:40px;padding-bottom:40px;">Judul Event</h5>
                <div>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div style="padding-top:40px;">
                    <button class="btn" style="color: #fff;background-color:orange;border-radius:5px;">Register</button>
                </div>
                {{-- <p style="padding-top:50px;">
                    Tinggalkan pinjaman dan bunga beresiko, karena dengan Benefits by GreatDay HR, tarik gaji dan pembayaran online dapat dilakukan dengan mudah kapan saja, dimana saja.
                </p>
                <div style="padding-top:30px;">
                    <a href="https://play.google.com/store/apps/details?id=com.dataon.sunfishgo">
                        <img src="{{ asset('img/googleplaystore.svg') }}" alt="" style="width:200px;margin-right:20px;margin-bottom:10px;">
                    </a>
                    <a href="https://apps.apple.com/id/app/greatday-hr/id1149720670?l=id">
                        <img src="{{ asset('img/app_store.svg') }}" alt="" style="width:220px;">
                    </a>
                </div> --}}
            </div>
            <div class="col-4 text-center">
                <img class="" src="{{ asset('img/Benefits UI.png') }}" alt="" style="width:90%;">
            </div>
        </div>
    </div>
</div>

<div class="blue-bg">
    <div class="container">
        <div class="row">
            {{-- <div class="col-12 text-center" style="padding-top:50px;padding-bottom:50px;">
                <h2>Our Happy Customer</h2>
            </div> --}}

            <div class="col-12 text-center" style="padding-top:50px;padding-bottom:50px;">
                <h2>Mari tingkatkan kesejahteraan karyawan</h2>
            </div>
            
            <div class="col-12">
                <form action="" id="form-contact">
                    <div class="row">
                        <div class="col-6">
                            Nama Lengkap <br>
                            <input class="form-control" type="text" id="nama-lengkap">
                        </div>
                        <div class="col-6">
                            Alamat Email <br>
                            <input class="form-control" type="text" id="email">
                        </div>
                        <div class="col-6">
                            Nomor Handphone <br>
                            <input class="form-control" type="text" id="nomor">
                        </div>
                        <div class="col-6">
                            Nama Perusahaan <br>
                            <input class="form-control" type="text" id="nama-perusahaan">
                        </div>
                        <div class="col-6">
                            Posisi / Jabatan Anda <br>
                            <input class="form-control" type="text" id="nomor">
                        </div>
                        <div class="col-6">
                            Jumlah Karyawan <br>
                            <input class="form-control" type="text" id="nama-perusahaan">
                        </div>
                        <div class="col-12">
                            Jelaskan Problem / Solusi yang Diharapkan
                            <textarea class="form-control" name="" id="" cols="30" rows="8" style="width:100%;"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary" style="background-color:orange;border:none;">Gratis Tanpa Biaya</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row">
        <div class="col-12 text-center" style="padding-top:50px;padding-bottom:50px;">
            <h2>FAQ</h2>
        </div>

        <div class="col-12">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-a1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a1" aria-expanded="false" aria-controls="flush-collapseOne">
                            Apa itu Benefits by greatday hr?
                        </button>
                    </h2>
                    <div id="a1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            -
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-a2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2" aria-expanded="false" aria-controls="flush-collapseOne">
                            Apakah Benefits memberikan pinjaman pada Karyawan?
                        </button>
                    </h2>
                    <div id="a2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            -
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-a3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3" aria-expanded="false" aria-controls="flush-collapseOne">
                            Siapa membayar gaji yang ditarik terlebih dahulu?
                        </button>
                    </h2>
                    <div id="a3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            -
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-a4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a4" aria-expanded="false" aria-controls="flush-collapseOne">
                            Berapa biaya perusahaan menggunakan Benefits?
                        </button>
                    </h2>
                    <div id="a4" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            -
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-a5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a5" aria-expanded="false" aria-controls="flush-collapseOne">
                            Dari mana Benefits mendapatkan keuntungan?
                        </button>
                    </h2>
                    <div id="a5" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            -
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection



@section('footer')
<script src="{{ asset('assets/onix/assets/js/owl-carousel.js') }}"></script>
<script>
    function idr_format(val){
        // var bilangan = 10000;
        // console.log(val)
        var bilangan = val.toString();
        // console.log(bilangan);
        var	number_string = bilangan,
            sisa 	= number_string.length % 3,
            rupiah 	= number_string.substr(0, sisa),
            ribuan 	= number_string.substr(sisa).match(/\d{3}/g);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join(',');
        }
        // document.write(rupiah);
        return rupiah;
        // return val;
    }
    function idr_formatt(num){
        return (
            num.replace('.', ',').replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') //+ ' €'
            // num.toFixed(2).replace('.', ',').replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.') //+ ' €'
        )
    }

    $(document).ready(function() {
        $('#owl-demo-layer1').owlCarousel({
            animateOut: 'slideOutRgiht',
            animateIn: 'flipInX',
            items:1,
            margin:30,
            stagePadding:30,
            smartSpeed:450
        });

        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            nav: true,
            dots: true,
            loop: true,
            // autoplay: true,
            responsive: {
                0: {
                items: 1
                },
                600: {
                items: 3
                },
                1000: {
                items: 4
                }
            }
        })
    })

    $('#hari-masuk, #total-kerja, #gaji').on('change input', function(){
        $('#append-hari-masuk').empty();
        $('#append-total-kerja').empty();
        $('#append-gaji').empty();
        $('#append-total-tarik').empty();

        var hariMasuk = $('#hari-masuk').val();
        var totalKerja = $('#total-kerja').val();
        var gaji = $('#gaji').val();

        var cal = (parseInt(hariMasuk) / parseInt(totalKerja)) * gaji;
        var total = cal.toFixed(2);
        console.log(total)

        $('#append-hari-masuk').html(hariMasuk);
        $('#append-total-kerja').html(totalKerja);
        $('#append-gaji').html(idr_formatt(gaji));
        $('#append-total-tarik').html(idr_formatt(total));
    });

    $('#jumlah-karyawan, #rata, #persentase').on('change input', function(){
        $('#append-jumlah-karyawan').empty();
        $('#append-rata').empty();
        $('#append-persentase').empty();
        $('#append-total-tarik-perusahaan').empty();

        var jumlah = $('#jumlah-karyawan').val();
        var rata = $('#rata').val();
        var persentase = $('#persentase').val();

        var cal = parseInt(jumlah) * parseInt(rata) * (parseInt(persentase) / 100);
        var total = cal.toFixed(2);

        $('#append-jumlah-karyawan').html(jumlah);
        $('#append-rata').html(idr_formatt(rata));
        $('#append-persentase').html(persentase+'%');
        $('#append-total-tarik-perusahaan').html(idr_formatt(total));
    });
</script>
@endsection