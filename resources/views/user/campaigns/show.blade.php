@extends('shared.layout')
@section('body')
    <div class="hero hero-gradient">
        <div class="container">
            <h1 class="hero-heading">{{ $campaign->name }}</h1>
            @if( !is_null( $custom_rate ) )
                <p class="get-piad">Get paid <span style="text-decoration: line-through;">${{ $campaign->rate }} </span><b>${{ $custom_rate->rate }}</b> per lead.</p>
            @else
                <p class="get-piad">Get paid <b>${{ $campaign->rate }}</b> per lead. </p>
            @endif
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="page-container no-shadow no-border">
        <div class="container text-center">
            @if($daily_cap_status)
                <div class="alert alert-danger">This campaign has reached its daily cap ({{ $campaign->daily_cap }} leads a day). It will reset at midnight.</div>
            @endif
            <h2>Category: {{ $campaign->category->name }}</h2>
            <hr>
            <div class="c-info-post">{{ $campaign->description }}</div>
            <div class="c-info-req">
                <h5><strong>Requirements:</strong></h5>
                <div>{{ $campaign->requirements }}</div>
            </div>

            <div class="container" style="height: 20px;"></div>
            @unless($daily_cap_status)
                <div style="" id="promotionalLink">
                    <hr>
                    <div class="input-group">
                        <label class="input-group-addon" for="exampleInputAmount">Promotion Link</label>
                        <input type="text" class="form-control" id="exampleInputAmount" value="{{ "http://anatrk.com" . ('/track/'. $campaign->id . '/' . auth()->user()->id) }}">
                    </div>
                    <br>
                    <div class="input-group">
                        <label class="input-group-addon" for="exampleInputAmount">Promotion Link</label>
                        <input type="text" class="form-control" id="exampleInputAmount" value="{{ "http://reachurl.com" . ('/track/'. $campaign->id . '/' . auth()->user()->id) }}">
                    </div>
                    <hr>
                </div>
            @endunless
            <div class="clearfix" style="margin: 5px;"></div>

            {{--@if(auth()->check())--}}
                {{--<div class="">--}}
                    {{--<button id="generateBtn" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Generate Your Unique Promotional Link</button>--}}
                {{--</div>--}}
            {{--@endif--}}

            <div class="clearfix" style="margin: 10px;"></div>

            @unless($images->isEmpty() || $videos->isEmpty())
                <h2>Creatives</h2>
                <hr>

                @unless($images->isEmpty())
                    <h5><strong>Promotional Images:</strong></h5>
                    <div class="row">
                        @foreach($images as $file)
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="thumbnail">
                                    <img src="/campaign/gallery/image/{!! $campaign->id . '/' . $file !!}" alt="...">
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endunless

                @unless($videos->isEmpty())
                    <h5><strong>Promotional Videos:</strong></h5>
                    <div class="row">
                        @foreach($videos as $file)
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="thumbnail">
                                    <video controls style="width: 100%;">
                                        <source src="/campaign/gallery/video/{!! $campaign->id . '/' . $file !!}" type="video/{{ pathinfo($file, PATHINFO_EXTENSION) }}">
                                        Your browser does not support the video element.
                                    </video>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endunless
            @endunless

            <hr>

            <div class="">
                <a class="btn btn-primary btn-lg" href="{!! url('/campaigns')  !!}">Go Back</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <hr>
    </div>

@endsection


@section('scripts')
    @if(auth()->check())
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4 class="center">By generating your referral link you agree that:</h4>
                        <div>
                            <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> When promoting a campaign, you must include the promotional link generated by InfluencersReach. You understand that this is the only way you can get paid for unique verified clicks and downloads. You are welcome to use a url shortener to make the link smaller.</p>
                            <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Your post, including the text and images, should always be relevant to the campaign.</p>
                            <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Click fraud (fake clicks) using bots or other automated services will automatically enroll you on the "Industry-wide Blacklist" banning you permanently from using InfluencersReach.</p>
                        </div>
                        <div>
                            <div class="alert alert-info" role="alert"><strong>You are only allowed to promote on the approved accounts <a href="{{ url('/promote/') }}">here</a></strong>.</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-md" data-dismiss="modal">CANCEL</button>
                        <button type="button" class="btn btn-primary btn-md" data-dismiss="modal" id="okBtn" style="padding-left: 15px; padding-right: 15px;"> OK </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    
    <script type="text/javascript">
        $( document ).ready(function(){
            $('#okBtn').click(function () {
                $('#generateBtn').fadeOut('slow', function () {
                    $('#promotionalLink').fadeIn('slow');
                });
            });
        });
    </script>
@endsection