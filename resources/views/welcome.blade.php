@extends('layouts.app')

@section('content')

   <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="intro-text">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#location" role="tab">Search by Location</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#guide" role="tab">Search by Guide</a>
              </li>
            </ul><!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="location" role="tabpanel">
                <form class="search" method="get" action="/search">
                  <input type="hidden" name="type" value="tour">
                  <input type="search" name="s" placeholder="Search by Location (Tourist Area)">
                </form>
              </div>
              <div class="tab-pane" id="guide" role="tabpanel">
                <form class="search" method="get" action="/search">
                  <input type="hidden" name="type" value="guide">
                  <input type="search" name="s" placeholder="Search by Guide">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Portfolio Grid -->
  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Tourist Areas</h2>
          <h3 class="section-subheading text-muted">Best tourist area to explore.</h3>
        </div>
      </div>
      
      <div class="row">
        @foreach ($touristAreas as $area)
            <div class="col-md-4 col-sm-6 portfolio-item">
              <a class="portfolio-link" href="/tour/{{$area->user_id}}/{{$area->slug}}">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-arrow-right fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="{{asset('images/touristarea').'/'.$area->image}}" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>{{$area->title}}</h4>
                <p class="text-muted">{{$area->description}}</p>
              </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>


  <!-- Team -->
  <section class="bg-light" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Guide</h2>
          <h3 class="section-subheading text-muted">Our guides to make your tour easy and memorable</h3>
        </div>
      </div>
      <div class="row">
        @foreach ($guides as $guide)
          <div class="col-sm-4">
            <div class="team-member">
              <a href="/user-detail/{{$guide->username}}">
                <img class="mx-auto rounded-circle" src="{{asset('images/user').'/'.$guide->image}}" alt="">
                <h4>{{$guide->name}}</h4>
                <p class="text-muted">{{$guide->name}}</p>
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
