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

    .cont-nav-tabs{
        border: 1px solid #f4f4f9;
        background-color: #fff;
        -webkit-box-shadow: 0 2px 4px 0 rgb(12 0 46 / 4%);
        box-shadow: 0 2px 4px 0 rgb(12 0 46 / 4%);
        padding: 50px 40px;
    }
    .nav-tabs li{
        width: 100%;
    }
    .nav-tabs .nav-link:hover{
        border: 1px solid transparent;
    }
    .nav-tabs{
        border-bottom: none;
    }
    .nav-tabs .active{
        border: none;
        /* #22affd */
    }
    .nav-tabs .nav-link.active{
        color: #22affd;
        border-bottom: 1px solid;
    }
    .nav-tabs .nav-link{
        padding: 20px 0 0 0;
    }
    .accordion-button:not(.collapsed) {
        color: #22affd;
        background-color: transparent;
    }
    .accordion-body{
        color: #677294;
    }
</style>
@endsection



@section('content')
{{-- <div class="main-banner" id="top"></div> --}}
<div class="blue-bg" style="padding-top:100px;padding-bottom:100px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="color:#fff;">
                <h1 style="font-weight: 700;">FAQ</h1>
                {{-- <p style="color:#fff;padding-top:50px;">
                    Get answers to some of the commonly asked questions about our financial wellness platform.
                    If you cannot find what you are looking for please contact us.
                </p> --}}
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top:100px;">
    <div class="row">
        <div class="col-3 cont-nav-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <h4 style="font-size:22px;font-weight:600;">Quick Navigation</h4>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                        About
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                        Security & Privacy
                    </button>
                </li>
            </ul>
        </div>
        <div class="col-9" style="padding: 0 30px 0 30px;">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h4 style="padding: 0 30px 30px 20px;">About</h4>

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-a1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a1" aria-expanded="false" aria-controls="flush-collapseOne">
                                    What is Benefits?
                                </button>
                            </h2>
                            <div id="a1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Benefits is an employee benefit solution that employers can offer to their employees to help them overcome financial shortfalls between paychecks. With Benefits, employees are able to access their earned but unpaid wages allowing employees to be financially resilient when in need.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-a2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2" aria-expanded="false" aria-controls="flush-collapseTwo">
                                How does a business offer Benefits?
                                </button>
                            </h2>
                            <div id="a2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Benefits partners with employers to deliver financial wellness to their employees. Once an employer agrees to offer Benefits to their employees as an employee benefit, employees can access their earned but unpaid wages via the Benefits app. The service can go live within 48 hours. Benefits also supports with on-site implementation and training.    
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-a3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Is there any costs for businesses to offer Benefits to their employees?
                                </button>
                            </h2>
                            <div id="a3" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    No. There are no setup or recurring costs for the employer.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-a4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a4" aria-expanded="false" aria-controls="flush-collapseThree">
                                    How does Benefits make money?
                                </button>
                            </h2>
                            <div id="a4" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Incumbent financial institutions and payday lenders make money when people are stuck. Stuck paying interest, overdraft, and late fees.

                                    Benefits is different and makes money only by charging a flat membership fee. The Benefits membership fee is paid by employees only when they find value in our product and make progress with us.

                                    Why do we take this approach? Because we believe a membership is the only business model that truly aligns Benefits’s incentives with your employees financial well-being.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-a5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a5" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Is Benefits offering loans?
                                </button>
                            </h2>
                            <div id="a5" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    No. Benefits is not a credit solution. There is no underwriting, no hidden fees, no debt created and no interest charged.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-a6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a6" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Is Benefits Peer-to-Peer (P2P) Lending Platform?
                                </button>
                            </h2>
                            <div id="a6" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    No. It is not a credit solution. Benefits is an employee benefit solution offering financial wellness to employees.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-a7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a7" aria-expanded="false" aria-controls="flush-collapseThree">
                                    How do employees receive their accessed wages?
                                </button>
                            </h2>
                            <div id="a7" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Accessed wages will be available within 24hrs through the salary bank account on file with the employer.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-a8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a8" aria-expanded="false" aria-controls="flush-collapseThree">
                                    How long does it take to implement Benefits?
                                </button>
                            </h2>
                            <div id="a8" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Our employee benefit solution can go live within 48 hours as there is no integration required.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-a9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a9" aria-expanded="false" aria-controls="flush-collapseThree">
                                    What devices are currently supported by Benefits?
                                </button>
                            </h2>
                            <div id="a9" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Benefits is available on both Google Play and the App Store.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h4 style="padding: 0 30px 30px 20px;">Security & Privacy</h4>

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-b1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#b1" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Is Benefits system secure?
                                </button>
                            </h2>
                            <div id="b1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Yes. Benefits maintains the highest level of data security using 256-bit end-to-end encryption
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-b2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#b2" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Can I trust Benefits with my information?
                                </button>
                            </h2>
                            <div id="b2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Yes. We will never sell your information or data your employees or you provide. You can read more about this in our privacy policy.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-b3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#b3" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Our Privacy Policy?
                                </button>
                            </h2>
                            <div id="b3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    You can find the privacy policy <a href="#">here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



@section('footer')
<script>
    jQuery(function ($) {
        var $active = $('#accordion .panel-collapse.in').prev().addClass('active');
        $active.find('a').prepend('<i class="fas fa-minus"></i>');
        $('#accordion .panel-heading').not($active).find('a').prepend('<i class="fas fa-plus"></i>');
        $('#accordion').on('show.bs.collapse', function (e) {
            $('#accordion .panel-heading.active').removeClass('active').find('.fas').toggleClass('fas fa-minus');
            $(e.target).prev().addClass('active').find('.fas').toggleClass('fas fa-minus');
        })
    });
</script>
@endsection