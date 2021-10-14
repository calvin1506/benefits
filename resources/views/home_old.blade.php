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
</style>
@endsection



@section('content')
{{-- <div class="main-banner" id="top"></div> --}}
<div class="blue-bg" style="padding-top:100px;padding-bottom:100px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="color:#fff;">
                <h1 style="font-weight: 700;">Benefits for your Business</h1>
                <p style="color:#fff;padding-top:50px;">
                    Allowing your employees to access their wages when they need it most increases their financial wellbeing while providing a costless and hassle-free solution to burdensome cash advances ('kasbon').
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 text-center" style="padding-top:30px;padding-bottom:30px;">
            <h1>How often do you get asked for a salary advance?</h1>
            <h4 style="color:#6a7695;margin-top:40px;">Significant savings on administrative expenses and working capital</h4>
        </div>
        <div class="col-12 cont-cal" style="min-height:200px;">
            <p>Calculation</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4 text-center" style="padding-bottom:30px;">
            <h5>Less Risk</h5>
            <p>Mitigate your exposure and reduce the unnecessary risk of default</p>
        </div>
        <div class="col-4 text-center" style="padding-bottom:30px;">
            <h5>Less Costs</h5>
            <p>Eliminate the administrative burden that comes with distribution and deductions</p>
        </div>
        <div class="col-4 text-center" style="padding-bottom:30px;">
            <h5>Less Capital</h5>
            <p>Free up locked capital and avoid the disruption of your cash flow</p>
        </div>
    </div>
</div>
<div class="cont-top-seamless" style="padding-top:30px;padding-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="padding-top:30px;padding-bottom:50px;">
                <h2>Seamless integration</h2>
                <p style="color:#6a7695;">Up and running in no time – with no change to processes, cash flow or costs.</p>
            </div>
            <div class="col-4 text-center cont-home-seam-item">
                <div class="home-seam-number">1</div>
                <div class="home-separator"></div>
                <div class="home-seam-item">
                    <h4>Identify</h4>
                    <p style="font-weight:300:color:#677294;">We start with identifying your specific needs so you get the most benefit</p>
                </div>
            </div>
            <div class="col-4 text-center cont-home-seam-item">
                <div class="home-seam-number">2</div>
                <div class="home-separator"></div>
                <div class="home-seam-item">
                    <h4>Connect</h4>
                    <p style="font-weight:300:color:#677294;">We work closely with your HR-department to help onboard you to our platform</p>
                </div>
            </div>
            <div class="col-4 text-center cont-home-seam-item">
                <div class="home-seam-number">3</div>
                <div class="home-separator"></div>
                <div class="home-seam-item">
                    <h4>Launch</h4>
                    <p style="font-weight:300:color:#677294;">We tailor the roadmap for you and your employees ensures a successful launch</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 text-center" style="padding-top:30px;padding-bottom:30px">
            <h2>Less stress, more savings</h2>
            <p style="color:#6a7695; visibility: visible;animation-delay: 0.3s;animation-name: fadeInUp;">Immediate access to ones paycheck generates considerable savings for employers.</p>
        </div>
        
        <div class="col-4 text-center">
            <div class="cont-item-less-stress">
                <img src="https://www.wagely.app/wp-content/uploads/2020/01/wagely_symbol_turnover.svg" alt="" style="width:60px;">
                <h2>Reduced Turnover Costs</h2>
                <p>Allowing employees to access their earned wages increases motivation and job satisfaction resulting in considerable savings</p>
            </div>
        </div>
        <div class="col-4 text-center">
            <div class="cont-item-less-stress">
                <img src="https://www.wagely.app/wp-content/uploads/2020/01/wagely_symbol_retention_2.svg" alt="" style="width:60px;">
                <h2>Higher Retention</h2>
                <p>Offering real financial benefits to boost employee financial health creates trust and helps retain and attract high-performing talent</p>
            </div>
        </div>
        <div class="col-4 text-center">
            <div class="cont-item-less-stress" style="">
                <img src="https://www.wagely.app/wp-content/uploads/2020/01/wagely_symbol_productivity_3.svg" alt="" style="width:60px;">
                <h2>Increased Productivity</h2>
                <p>Accessing earned wages when needed, employees experience less financial stress and can focus on what is really important for your business</p>
            </div>
        </div>

        <div class="col-12 cont-turn-financial text-center" style="padding-top:50px;">
            <h2>Turn financial wellness into financial benefit for your bottom line.</h2>
            <div class="home-btn-get-started">Get Started</div>
        </div>
    </div>
</div>
@endsection



@section('footer')

@endsection