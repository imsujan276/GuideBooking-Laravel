@extends('layouts.public')

@section('content')
<div class="profile-list">
    <div class="profileName">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <a href="/">Home</a> / <a href="/user-detail/{{$guide->username}}">{{$guide->username}}</a> / {{$tour->title}}
                    <hr>
                    <h4>{{$tour->title}}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="detail-list">
        <div class="container">
            <div class="row" style="align-items:unset">
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="detail-image">
                        <img src="{{asset('images/touristarea').'/'.$tour->image}}">
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12">
                    <div class="detail-content">
                        <p>
                            <strong>City: </strong> {{$tour->city}} <br>
                            <strong>Country: </strong> {{$tour->country}} <br>
                            <strong>Guide: </strong> <a href="/user-detail/{{$guide->username}}"> {{$guide->name}} </a> <br>
                            <strong>Guide Rating: </strong>
                            @if($avgRate > 0)
                                @for($i=0; $i< $avgRate; $i++)
                                    <span class=""><i class="text-warning fa fa-star"></i></span>
                                @endfor
                                <br>
                            @else
                                Not Rated Yet
                            @endif
                        </p>

                        @auth 
                            @if($guide->guideProfile->availability_status == 1)
                                <button href="#" data-toggle="modal" data-target="#exampleModal">Send Request</button>
                            @else
                                <button style="margin-top: 10px; padding: 15px;" disabled class="btn btn-large btn-info">I'm in a Trip </button>
                            @endif
                        @else
                            <button href="/login">Log In to send request</button> 
                        @endauth
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
                    {!! html_entity_decode($tour->description) !!}
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
                        <h3> Tours By the Guide</h3>
                        <hr>
                        <ol>
                            @foreach ($guide->touristArea as $area)
                                <li> 
                                    <a href="#">{{$area->title }} </a> 
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--profile-list-->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Guide Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/booking-request">
        @csrf
        <input type="hidden" name="to" value="{{$guide->id}}">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Date</label>
                    <input type="date" name="date" class="form-control" id="inputCity" placeholder = "Date of Departure" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Time</label>
                    <input type="time" name="time" class="form-control" id="inputZip" placeholder = "Time of Departure" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Number of Days</label>
                    <input type="number" name="days" class="form-control" id="inputCity" placeholder="Number of days to make booking" >
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Number of People </label>
                    <input type="number" class="form-control" id="inputEmail4" placeholder="Number of People" name="peoples" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Type Of Tour</label>
                    <select id="inputState" class="form-control" name="tourType" required>
                        <option selected>Walking</option>
                        <option>By Vehicle</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="inputAddress">Write Something</label>
                <textarea class="form-control" id="inputAddress" rows="5" name="description" placeholder="Write something for the guide." REQUIRED></textarea>
            </div>
            
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send Request</button>
      </div>
      </form>
    </div>
  </div>
</div>


@endsection