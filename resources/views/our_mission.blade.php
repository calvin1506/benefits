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
                <h1 style="font-weight: 700;">Financial Wellness for Everyone</h1>
                <p style="color:#fff;padding-top:50px;">
                    Our mission is to provide a sustainable solution for all employees in breaking the cycle of debt caused by overdraft fees, high-interest credit or pay day loans and play a leading role in building financial wellness for lower- and middle-income workers in Indonesia.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 text-center" style="padding-top:90px;padding-bottom:70px;">
            <h1 style="color: #212D39;font-family: Poppins, Sans-serif;font-size: 40px;font-weight: 600;">Our goals for a better tomorrow</h1>
        </div>
        <div class="col-4 text-center">
            <div class="cont-item-less-stress">
                <img src="https://www.wagely.app/wp-content/uploads/2020/01/wagely_symbol_cycle-of-debt.svg" alt="" style="width:60px;">
                <h2>Break the cycle of debt</h2>
                <p>More than 75% of all Indonesians are living from paycheck to paycheck. By eliminating the costly ‘waiting for pay’ penalties, we protect employees from having to rely on costly payday loans forcing them into debt traps between paychecks.</p>
            </div>
        </div>
        <div class="col-4 text-center">
            <div class="cont-item-less-stress">
                <img src="https://www.wagely.app/wp-content/uploads/2020/01/wagely_symbol_resilience.svg" alt="" style="width:60px;">
                <h2>Be financially resilient</h2>
                <p>Managing cashflow is the most pressing everyday issue for low- and middle income workers as they manage to cover basic needs throughout the month. Enabling fair financial services, employees reach financial resilience and wellness with us.</p>
            </div>
        </div>
        <div class="col-4 text-center">
            <div class="cont-item-less-stress" style="">
                <img src="https://www.wagely.app/wp-content/uploads/2020/01/wagely_symbol_wellbeing.svg" alt="" style="width:60px;">
                <h2>Enhance overall wellbeing</h2>
                <p>Unexpected expenses between paychecks are causing substantial financial stress and vulnerability among employees. We aim to meaningfully combat the systemic burden and increase employees’ health and happiness.</p>
            </div>
        </div>

        <div class="col-6" style="padding: 95px 50px 120px 120px;">
            <h2>Delivering real social impact</h2>
            <p>Adopting the UN Sustainable Development Goals as a blueprint to achieve a better and more sustainable future for all, we partner with impact investors and charities to help reduce the poverty premium and create social equality and economic opportunities for underserved communities.</p>
        </div>
        <div class="col-6"></div>

        <div class="col-12 text-center">
            <h2 style="color: #212D39;font-family: Poppins, Sans-serif;font-size: 40px;font-weight: 600;">Our five pillars of financial wellness</h2>
            <p style="color:#6A7695;margin-top:30px;margin-bottom:50px;">More than 120 million lower and middle income workers in Indonesia are being exploited by predatory lending practices and are disadvantaged by a banking system for their ‘between paychecks’ cashflow timing issues. We are here to challenge the status quo and bring financial wellness to everyone.</p>
        </div>

        <div class="col-4 text-center" style="padding: 0 20px;">
            <img src="https://www.wagely.app/wp-content/uploads/2020/01/wagely_symbol_turnover.svg" alt="" style="width:60px;margin-bottom:20px;">
            <h5 style="margin-bottom:10px;">Available to all employees</h5>
            <p style="color:#6A7695;">Financial wellness should be non-exclusive and offered to everyone within the organisation.</p>
        </div>
        <div class="col-4 text-center" style="padding: 0 20px;">
            <img src="https://www.wagely.app/wp-content/uploads/2020/01/wagely_symbol_turnover.svg" alt="" style="width:60px;margin-bottom:20px;">
            <h5 style="margin-bottom:10px;">Accessible every day</h5>
            <p style="color:#6A7695;">Access to financial wellness needs to be guaranteed around the clock because shortfalls can happen at any day of the week.</p>
        </div>
        <div class="col-4 text-center" style="padding: 0 20px;">
            <img src="https://www.wagely.app/wp-content/uploads/2020/01/wagely_symbol_turnover.svg" alt="" style="width:60px;margin-bottom:20px;">
            <h5 style="margin-bottom:10px;">Strong financial education</h5>
            <p style="color:#6A7695;">Providing access to financial services goes hand-in-hand with sound financial education to make better financial decisions.</p>
        </div>

        <div class="col-6 text-center" style="margin-top:30px;">
            <img src="https://www.wagely.app/wp-content/uploads/2020/01/wagely_symbol_turnover.svg" alt="" style="width:60px;margin-bottom:20px;">
            <h5 style="margin-bottom:10px;">No increase in debt for employees</h5>
            <p style="color:#6A7695;">Improving the financial wellness of employees can only be achieved without loaning money or encouraging debt.</p>
        </div>
        <div class="col-6 text-center" style="margin-top:30px;">
            <img src="https://www.wagely.app/wp-content/uploads/2020/01/wagely_symbol_turnover.svg" alt="" style="width:60px;margin-bottom:20px;">
            <h5 style="margin-bottom:10px;">Promotes healthy saving habits</h5>
            <p style="color:#6A7695;">Building good savings habits is the best way to help your employees feel better about their money and reduce workplace stress.</p>
        </div>

        <div class="col-12 cont-turn-financial text-center" style="padding-top:150px;">
            <h2 style="color: #212D39;font-family: Poppins, Sans-serif;font-size: 30px;font-weight: 600;">Join wagely in driving the change for a financially resilient tomorrow.</h2>
            <div class="home-btn-get-started">Get Started</div>
        </div>
    </div>
</div>

@endsection



@section('footer')

@endsection