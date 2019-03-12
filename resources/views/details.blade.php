@extends('layouts.public')

@section('content')
<div class="profile-list">
    <div class="profileName">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h4>Test Name</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="detail-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="detail-image">
                        <img src="/img/faces/avatar.jpg">
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12">
                    <div class="detail-content">
                        <p>
                            <strong>City: </strong> Kathmandu <br>
                            <strong>Country: </strong> Nepal <br>
                            <strong>Age: </strong> 32 <br>
                            <strong>Language: </strong> Nepali, English, Hindi <br>
                            <strong>Hours Rate: </strong> $10 <br>
                            <strong>Daily Rate(8hr): </strong> 80 USD <br>
                        </p>
                        <a href="#">Send Request</a>
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
                        <p>I am a professional Tour Guide from Kathmandu. I was born and brought up in Kathmandu according to the local Newar culture and tradition. So I know the history, culture, tradition and lifestyle of the Kathmandu Valley better than any others.</p>
                        <p><strong>What I offer</strong>
                        I can also arrange both the walking city tour and excursions by car. Beside the normal tourist interest places, I can also arrange tour to some beautiful Newar villages around Kathmandu Valley, less explored by tourists.I can also arrange home stay both in the city and in a village of the Kathmandu Valley if you are interested to experience the local culture and tradition closely.</p>

                        <p><strong>My Background, Licenses and certificates</strong>
                        I did my Guide training from Hotel Management and Tourism Training Center in Kathmandu and I have been guiding since 1997.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--profile-list-->

@endsection