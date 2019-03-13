@extends('layouts.public')

@section('content')
<div class="profile-list">
    <div class="profileName">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <a href="/">Home</a> / {{$guide->username}}
                    <hr>
                    <h4>{{$guide->name}}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="detail-list">
        <div class="container">
            <div class="row" style="align-items:unset">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="detail-image">
                        <img src="{{asset('images/user').'/'.$guide->image}}">
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="detail-content">
                        <p>
                            <strong>City: </strong> {{$guide->city}} <br>
                            <strong>Country: </strong> {{$guide->country}} <br>
                            <strong>Language: </strong> {{$guide->language}}  <br>
                            <strong>Daily Rate: </strong> NPR. {{$guide->guideProfile->rate_per_day}} <br>
                            <strong>Rating: </strong>
                            @if($avgRate > 0)
                                @for($i=0; $i< $avgRate; $i++)
                                    <span class=""><i class="text-warning fa fa-star"></i></span>
                                @endfor
                                <br>
                            @else
                                Not Rated Yet
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="full-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="full-detail-section">
                    {!! html_entity_decode($guide->guideProfile->skill_experience) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="full-detail-section">
                        <h3> Reviews ( {{$guide->guideFeedback->count()}}) </h3>
                        <hr>
                        <div class="row">
                            @foreach ($guide->guideFeedback as $feedback)
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>
                                                        <a class="float-left" href="#"><strong>{{ $feedback->from }}</strong></a>
                                                        @for($i=0; $i<$feedback->rate; $i++)
                                                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                        @endfor
                                                </p>
                                                <div class="clearfix"></div>
                                                    <p>
                                                        {{ $feedback->feedback }}
                                                    </p>
                                                    <span class="text-secondary float-right">15 Minutes Ago</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="full-detail-section">
                        <h3> Tours By the Guide</h3>
                        <hr>
                        <ol>
                            @foreach ($guide->touristArea as $area)
                                <li> 
                                    <a href="/tour/{{$area->user_id}}/{{$area->slug}}">{{$area->title }} </a> 
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--profile-list-->


@endsection