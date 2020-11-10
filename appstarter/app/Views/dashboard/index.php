<?= $this->extend('layout/dashboard'); ?>

<?= $this->section('content'); ?>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html" title="HOME"><i class="ion-paper-airplane"></i> euro <span>travel</span></a>
    </div> <!-- /.navbar-header -->

    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="<?= base_url('/dashboard/index') ?>">Home</a></li>
        <li><a href="<?= base_url('/about/index') ?>">about</a></li>
        <li><a href="<?= base_url('/service/index') ?>">services</a></li>
        <li><a href="<?= base_url('/contact/index') ?> ">contact</a></li>
      </ul> <!-- /.nav -->
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

<!-- Home -->
  <div id="header">
      <div class="flexslider">
          <ul class="slides">
              <li class="slider-item" style="background-image: url('assets/images/item-1.png')">
                  <div class="intro container">
                      <div class="inner-intro">
                          <h1 class="header-title">
                              <span>traveling</span> always "good idea"
                          </h1>
                          <p class="header-sub-title">
                              it leaves you speecless, then turns your into a storyteller.
                          </p>
                          <button class="btn custom-btn">
                              book now
                          </button>
                      </div>
                  </div>
              </li> <!-- /.slider-item -->
              <li class="slider-item" style="background-image: url('assets/images/item-2.png')">
                  <div class="intro">
                      <div class="inner-intro">
                          <h1 class="header-title">
                              to <span>travel</span> is to <span>live</span>
                          </h1>
                          <p class="header-sub-title">
                              it leaves you speecless, then turns your into a storyteller.
                          </p>
                          <button class="btn custom-btn">
                              book now
                          </button>
                      </div>
                  </div>
              </li> <!-- /.slider-item -->
          </ul> <!-- /.slides -->
      </div> <!-- /.flexslider -->
  </div> <!-- /#header -->
<!-- Find a Tour -->
<section class="tour section-wrapper container">
  <h2 class="section-title">
    Find a Tour
  </h2>
  <p class="section-subtitle">
    Where would you like to go?
  </p>
  <div class="row">
    <div class="col-md-3 col-sm-6">
      <form role="form" class="form-dropdown">
        <div class="form-group">
          <label for="sel1">Select list (select one):</label>
          <select class="form-control border-radius" id="sel1">
            <option>America</option>
            <option>Bangladesh</option>
            <option>Canada</option>
            <option>India</option>
          </select>
        </div>
      </form>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="input-group">
        <input type="text" class="form-control border-radius border-right" placeholder="Arrival"/>
        <span class="input-group-addon border-radius custom-addon">
          <i class="ion-ios-calendar"></i>
        </span>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="input-group">
        <input type="text" class="form-control border-radius border-right" placeholder="Departure"/>
        <span class="input-group-addon border-radius custom-addon">
          <i class="ion-ios-calendar"></i>
        </span>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="btn btn-default border-radius custom-button">
        Search
      </div>
    </div>
  </div>
</section> <!-- /.tour -->


<!-- Our Blazzing offers -->
<section class="offer section-wrapper">
  <div class="container">
    <h2 class="section-title">
      Our Blazzing offers
    </h2>
    <p class="section-subtitle">
      Lorem Ipsum is simply dummy text of the industry.
    </p>
    <div class="row">
      <div class="col-sm-3 col-xs-6">
        <div class="offer-item">
          <div class="icon">
            <i class="ion-social-euro"></i>
          </div>
          <h3>
            Affordable Pricing
          </h3>
          <p>
            Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
          </p>
        </div>
      </div> <!-- /.col-md-3 -->

      <div class="col-sm-3 col-xs-6">
        <div class="offer-item">
          <div class="icon">
            <i class="ion-ios-home"></i>
          </div>
          <h3>
            High class Hotels
          </h3>
          <p>
            Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
          </p>
        </div>
      </div> <!-- /.col-md-3 -->

      <div class="col-sm-3 col-xs-6">
        <div class="offer-item">
          <div class="icon">
            <i class="ion-android-bus"></i>
          </div>
          <h3>
            Luxury Transport
          </h3>
          <p>
            Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
          </p>
        </div>
      </div> <!-- /.col-md-3 -->

      <div class="col-sm-3 col-xs-6">
        <div class="offer-item">
          <div class="icon">
            <i class="ion-ios-locked"></i>
          </div>
          <h3>
            Highest Security
          </h3>
          <p>
            Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
          </p>
        </div>
      </div> <!-- /.col-md-3 -->
    </div> <!-- /.row -->
  </div> <!-- /.container -->
</section> <!-- /.offer -->


<!-- Top place to visit -->
<section class="visit section-wrapper">
  <div class="container">
    <h2 class="section-title">
      Top place to visit
    </h2>
    <p class="section-subtitle">
      Lorem Ipsum is simply dummy text of the industry.
    </p>

    <div class="owl-carousel visit-carousel" id="">
      <div class="item">
        <img src="assets/images/visit-1.png" alt="visit-image" class="img-responsive visit-item">
      </div>
      <div class="item">
        <img src="assets/images/visit-2.png" alt="visit-image" class="img-responsive visit-item">
      </div>
      <div class="item">
        <img src="assets/images/visit-3.png" alt="visit-image" class="img-responsive visit-item">
      </div>
      <div class="item">
        <img src="assets/images/visit-1.png" alt="visit-image" class="img-responsive visit-item">
      </div>
      <div class="item">
        <img src="assets/images/visit-2.png" alt="visit-image" class="img-responsive visit-item">
      </div>
      <div class="item">
        <img src="assets/images/visit-3.png" alt="visit-image" class="img-responsive visit-item">
      </div>
    </div>
  </div> <!-- /.container -->
</section> <!-- /.visit -->

<div class="offer-cta">
<div class="container">
  <div class="offering">
    <div class="percent">
      <span>15%</span> off
    </div>
    <div class="FTour">
      for <strong>Family Tour</strong>
    </div>
    <a class="btn btn-default price-btn" href="#">
      see our price
    </a>
  </div> <!-- /.offering -->
</div> <!-- /.container -->
</div> <!-- /.offer-cta -->

<section class="additional-services section-wrapper">
  <div class="container">
    <h2 class="section-title">
      Additional services
    </h2>
    <p class="section-subtitle">
      Lorem Ipsum is simply dummy text of the industry.
    </p>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-1.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Photography
            </h4>
            <p class="add-srvc">
              Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-2.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Cycling
            </h4>
            <p class="add-srvc">
              Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-3.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Waking
            </h4>
            <p class="add-srvc">
              Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-4.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Skiing
            </h4>
            <p class="add-srvc">
              Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-5.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Sea beach
            </h4>
            <p class="add-srvc">
              Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->

      <div class="col-md-4 col-sm-6">
        <div class="custom-table">
          <img src="assets/images/add-srvc-6.png" alt="" class="add-srvc-img">
          <div class="add-srvc-detail">
            <h4 class="add-srvc-heading">
              Hill tracking
            </h4>
            <p class="add-srvc">
              Etiam pharetra ut ante eget ehy efficitur. Nullam quis felis at nunc vehicula sollicitudin euliquam quis felis atblan dit.
            </p>
          </div> <!-- /.add-srvc-detail -->
        </div> <!-- /.custom-table -->
      </div> <!-- /.col-md-4 col-sm-6 -->
    </div> <!-- /.row -->
  </div> <!-- /.container -->
</section> <!-- /.Additional-services -->


<div class="section-wrapper sponsor">
  <div class="container">
    <div class="owl-carousel sponsor-carousel">
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-1.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-2.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-3.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-4.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-5.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
      <div class="item">
        <a href="#">
          <img src="assets/images/sp-6.png" alt="sponsor-brand" class="img-responsive sponsor-item">
        </a>
      </div>
    </div> <!-- /.owl-carousel -->
  </div> <!-- /.container -->
</div> <!-- /.sponsor -->

<div class="subscribe section-wrapper">
  <a class="brand-logo" href="index.html" title="HOME"><i class="ion-paper-airplane"></i> Euro <span>Travel</span></a>
  <p class="subscribe-now">
    Subscribe to our Newsletter
  </p>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
        <div class="input-group">
          <input type="email" class="form-control border-radius" placeholder="Email address">
          <span class="input-group-btn">
            <button class="btn btn-default border-radius custom-sub-btn" type="button">DONE</button>
          </span>
        </div><!-- /input-group -->
      </div>
    </div>
  </div>



  <ul class="social-icon">
    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
    <li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
  </ul>
</div> <!-- /.subscribe -->


<footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-4">
        <div class="text-left">
          &copy; Copyright Euro Travels
        </div>
      </div>
      <div class="col-xs-4">
        Theme by <a href="http://www.themewagon.com">THEMEWAGON</a>
      </div>
      <div class="col-xs-4">
        <div class="top">
          <a href="#header">
            <i class="ion-arrow-up-b"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
<?= $this->endSection(); ?>
