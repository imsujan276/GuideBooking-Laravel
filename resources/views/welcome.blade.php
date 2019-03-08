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
                <form class="search">
                  <input type="search" placeholder="Search by Location">
                </form>
              </div>
              <div class="tab-pane" id="guide" role="tabpanel">
                <form class="search">
                  <input type="search" placeholder="Search by Guide">
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
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/image.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Pokhara</h4>
            <p class="text-muted">Short Description</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/image1.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Anaikot</h4>
            <p class="text-muted">Short Description</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/image2.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Poon Hill</h4>
            <p class="text-muted">Short Description</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/image3.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Bhaktapur</h4>
            <p class="text-muted">Short Description</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/image.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Thamel</h4>
            <p class="text-muted">Short Description</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/image1.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Lumbini</h4>
            <p class="text-muted">Short Description</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Team -->
  <section class="bg-light" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Featured Guide</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <a href="#">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Pramod Singh</h4>
              <p class="text-muted">Lead Guide</p>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <a href="#">
              <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
              <h4>Rame Gurung</h4>
              <p class="text-muted">Tourist Guide</p>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member mar-btn">
            <a href="#">
              <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
              <h4>Kumari Tamang</h4>
              <p class="text-muted">Tour Guide</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
