@extends('layouts.base')
@section('content')
<div class="div page-content page-home">
    <!-- carousel -->
  <section class="store-carousel">
    <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
                  <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
                  >
                    <ol class="carousel-indicators">
                          <li
                        data-target="#storeCarousel"
                        data-slide-to="0"
                        class="active"
                          ></li>

                          <li data-target="#storeCarousel" data-slide-to="1"></li>
                          <li data-target="#storeCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img
                                 src="images/bgcarousel.png"
                                 class="d-block w-100"
                                  alt="Carousel Image"
                            />
                            
                          </div>
                          <div class="carousel-item">
                            <img
                                  src="images/bgcarousel.png"
                                  class="d-block w-100"
                                  alt="Carousel Image"
                            />
                                             
                          </div>
                          <div class="carousel-item">
                            <img
                              src="images/bgcarousel.png"
                              class="d-block w-100"
                              alt="Carousel Image"
                            />
               
                          </div>
                    </div>
                  </div>
            </div>
          </div>
    </div>
  </section>
</div>
<div class="container" style="margin-top: 5cm;">
  <h1 style="font-family: Gilroy; color: #A91F5A;">About Us</h1>
  <div class="row" style="padding: 5px;">
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card text-wrap" style="width: 17rem; padding: 15px; height: 30rem;">
        <img src="{{asset('images/dimas.jpeg')}}" class="card-img-top" alt="..." style="width: 15rem; height: 15rem;">
        <div class="card-body overflow-auto" style="font-family: Gilroy;">
          <h5 class="card-title">Dimas Nabil</h5>
          <p class="card-text">Fullstack</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card text-wrap" style="width: 17rem; padding: 15px; height: 30rem;">
        <img src="{{asset('images/ittoday.jpg')}}" class="card-img-top" alt="..." style="width: 15rem; height: 15rem;">
        <div class="card-body overflow-auto" style="font-family: Gilroy;">
          <h5 class="card-title">Ilham Iyadillah</h5>
          <p class="card-text">...</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card text-wrap" style="width: 17rem; padding: 15px; height: 30rem;">
        <img src="{{asset('images/ittoday.jpg')}}" class="card-img-top" alt="..." style="width: 15rem; height: 15rem;">
        <div class="card-body overflow-auto" style="font-family: Gilroy;">
          <h5 class="card-title">Aldinur Syahdin</h5>
          <p class="card-text">...</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card text-wrap" style="width: 17rem; padding: 15px; height: 30rem;">
        <img src="{{asset('images/ittoday.jpg')}}" class="card-img-top" alt="..." style="width: 15rem; height: 15rem;">
        <div class="card-body overflow-auto" style="font-family: Gilroy;">
          <h5 class="card-title">Mahara Ihsan</h5>
          <p class="card-text">...</p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection