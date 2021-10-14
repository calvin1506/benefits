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
                <h1 style="font-weight: 700;">Want to find out more?</h1>
                <p style="color:#fff;padding-top:50px;">
                    If you are interested in increasing productivity, motivation and retention of your employees, please get in contact with us.
We are happy to show you how financial wellness can have a measurable impact on your bottom line!
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top:100px;">
    <div class="row">
        <div class="col-3">
            <h2 style="color: #222d39;font-family: poppins,Sans-serif;font-size: 20px;font-weight: 500;margin-bottom:20px;">Location</h2>
            
            <h2 style="color: #677294;font-family: poppins,Sans-serif;font-size: 15px;margin-bottom:15px;">Financial Wellness Holdings Pte. Ltd.</h2>
            
            <p style="color: #677294;font-family: poppins,Sans-serif;font-size: 15px;">
                24 Raffles Place <br>
                #10-05 Clifford Centre <br>
                Singapore 048621
            </p>

            <hr style="margin-top:40px;margin-bottom:40px;">

            <h2 style="color: #222d39;font-family: poppins,Sans-serif;font-size: 20px;font-weight: 500;margin-bottom:20px;">Contact Info</h2>
            <span style="color:#222d39;">E-Mail</span> <a style="color: #677294;" href="mailto:hello@wagely.app">hello@wagely.app</a>
        </div>
        <div class="col-9" style="padding: 0 30px 0 30px;">
            <form action="post" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>
            </form>
        </div>
    </div>
</div>

@endsection



@section('footer')

@endsection