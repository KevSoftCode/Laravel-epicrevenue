@extends('shared/layout')

@section('styles')
@endsection

@section('body')
    <div class="homepage">
        <div class="hero main-promo hero-lg">
            <div class="container">
                <h1>Monetize the reach of your social media following</h1>
                <div class="row">
                    <div class="col-sm-8">
                        <h4>Do you have a large following ? Apply to our network and start promoting today.</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
                <a href="{{ url('/affiliate/apply') }}" class="btn btn-primary btn-lg btn-sm-txt btn-extra-padding btn-extra-margin btn-radius">Become an Affiliate</a>
            </div>
        </div><!-- End .hero -->

        <div class="hero first-promo">
            <div class="container">
                <div class="col-md-4 col-xs-12"><iframe width="560" height="315" src="https://www.youtube.com/embed/4fn9u9YtrdY?controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
                <div class="col-md-8 col-xs-12"><h1 class="promo-title">Cheaters Promo</h1><h4 class="promo-title">Hosted By: Chris Stylez</h1></div>
            </div>
        </div>

<div class="hero second-promo">
        <div class="container text-center">
            <h5 class="font-gray"><strong>Join Us</strong></h5>
            <h2 style="margin-top:10px;">Become an Affiliate</h2>
            <img class="img-responsive" style="padding: 70px 0;margin: 0 auto;width: 250px;" src="https://i.imgur.com/YIisQ4r.png">

            <div class="clearfix"></div>

            <div>
                <a href="{{ url('/affiliate/apply') }}" class="btn btn-primary btn-lg btn-sm-txt btn-extra-padding btn-extra-margin btn-radius">Apply Now</a> <a href="{{ url('/influencers') }}" class="btn btn-gray btn-lg btn-sm-txt btn-extra-padding btn-extra-margin btn-radius">Learn More</a>
            </div>
        </div>
</div>

<div class="hero third-promo">
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
        </div>


        <div class="clearfix"></div>
    </div>
@endsection