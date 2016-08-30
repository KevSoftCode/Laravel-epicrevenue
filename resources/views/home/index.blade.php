@extends('shared/layout')

@section('styles')
    <style>
        .why-img {
            width: 100px;
            margin: 0 auto;
            display: block;
        }
    </style>
@endsection

@section('body')
    <div class="homepage">
        <div class="hero hero-lg">
            <div class="container">
                <h1>Monetize the reach of your social media following</h1>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h4>Do you have a fan page, a niche page, a model page, or any other type of page with a large following?</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
                <a href="{{ url('/register') }}" class="btn btn-primary btn-lg btn-sm-txt btn-extra-padding btn-extra-margin btn-radius">Create an account!</a>
            </div>
        </div><!-- End .hero -->

        <div class="hero hero-sm" style="background-image: none;background-color: #3b76ed;">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-4">
                        <div><span class="glyphicon glyphicon-th-list glyphicon-cirlce"></span></div>
                        <h4>#SEEMORE</h4>
                        <p class="">See visually how your account grows, analyze your audience, target better.</p>
                    </div>
                    <div class="col-sm-4">
                        <div><span class="glyphicon glyphicon-th-list glyphicon-cirlce"></span></div>
                        <h4>#MAKEMORE</h4>
                        <p class="">Paid to post, paid to drive leads, plus a lot more ways to generate revenue.</p>
                    </div>
                    <div class="col-sm-4">
                        <div><span class="glyphicon glyphicon-th-list glyphicon-cirlce"></span></div>
                        <h4>#DOMORE</h4>
                        <p class="">Use our services, team and exclusive services to grow your brand.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container" style="height: 50px;"></div>

        <div class="container text-center">
            <h5 class="font-gray"><strong>Join Us</strong></h5>
            <h2 style="margin-top:10px;">Become an Influencer</h2>
            <img class="img-responsive" style="padding: 70px 0;margin: 0 auto;width: 250px;" src="https://i.imgur.com/e2tD9Ik.png">

            <div class="clearfix"></div>

            <div>
                <a href="{{ url('/register') }}" class="btn btn-primary btn-lg btn-sm-txt btn-extra-padding btn-extra-margin btn-radius">Sign Up Now</a> <a href="{{ url('/influencers') }}" class="btn btn-gray btn-lg btn-sm-txt btn-extra-padding btn-extra-margin btn-radius">Learn More</a>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="container">
            <hr>
        </div>
        <div class="container text-center">
            <h5 class="font-dark-gray"><strong>Track</strong></h5>
            <h2 style="margin-top:10px; margin-bottom: 20px;">Track your reach</h2>
            <p>From our tracking panel you will be able to see how much clicks your page is driving as well as the amount of revenue being generated <b>in real-time</b>.</p>
            <div class="col-xs-12" style="height:20px;"></div>
            <a href="{{ url('/register') }}" class="btn btn-default btn-lg btn-sm-txt btn-extra-padding btn-extra-margin btn-radius">Join Now!</a>
        </div>

        <div class="clearfix"></div>
        <img class="img-responsive" src="{{ url('/images/home/curve.png') }}" alt="Graph">
        <div class="container">
            <hr>
        </div>

        <div class="container text-center">
            <h2 style="padding: 70px 0;">Brands we've promoted</h2>
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-6 brand"><img class="img-responsive" src="{{ url('/images/home/clients/ICM-Logo.png') }}" alt=""/></div>
                <div class="col-md-2 col-sm-3 col-xs-6 brand"><img class="img-responsive" src="{{ url('/images/home/clients/booking.png') }}" alt=""/></div>
                <div class="col-md-2 col-sm-3 col-xs-6 brand"><img class="img-responsive" src="{{ url('/images/home/clients/expedia.png') }}" alt=""/></div>
                <div class="col-md-2 col-sm-3 col-xs-6 brand"><img class="img-responsive" src="{{ url('/images/home/clients/groupon.png') }}" alt=""/></div>
                <div class="col-md-2 col-sm-3 col-xs-6 brand"><img class="img-responsive" src="{{ url('/images/home/clients/king.png') }}" alt=""/></div>
                <div class="col-md-2 col-sm-3 col-xs-6 brand"><img class="img-responsive" src="{{ url('/images/home/clients/netflix.png') }}" alt=""/></div>
                <div class="col-md-2 col-sm-3 col-xs-6 brand"><img class="img-responsive" src="{{ url('/images/home/clients/nook.png') }}" alt=""/></div>
                <div class="col-md-2 col-sm-3 col-xs-6 brand"><img class="img-responsive" src="{{ url('/images/home/clients/skout.png') }}" alt=""/></div>
                <div class="col-md-2 col-sm-3 col-xs-6 brand"><img class="img-responsive" src="{{ url('/images/home/clients/wordswithfriends.png') }}" alt=""/></div>
                <div class="col-md-2 col-sm-3 col-xs-6 brand"><img class="img-responsive" src="{{ url('/images/home/clients/amazon.png') }}" alt=""/></div>
                <div class="col-md-2 col-sm-3 col-xs-6 brand"><img class="img-responsive" src="{{ url('/images/home/clients/pocket.png') }}" alt=""/></div>
                <div class="col-md-2 col-sm-3 col-xs-6 brand"><img class="img-responsive" src="{{ url('/images/home/clients/dena.png') }}" alt=""/></div>
            </div>
        </div>


        <div class="clearfix"></div>
    </div>
    <div class="container">
        <hr>
    </div>
@endsection