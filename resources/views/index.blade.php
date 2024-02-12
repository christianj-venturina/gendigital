<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/index.css" />
    <title>Home - GenDigital</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar')
    @include('layouts/messages')
    <!--HERO-->
    <div class="container" id="hero">
      <div class="row">
        <div class="col-lg-6" id="hero_left_div">
          <h1 style="font-size: 60px" class="mb-5">
            Powering the digital generation
          </h1>
          <div>
            <a href="/products"><strong>Shop all</strong></a>
          </div>
        </div>
        <div class="col-lg-6 text-end">
          <div
            class="carousel slide"
            data-bs-ride="carousel"
            data-bs-interval="4000"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="/img/phone.png"
                  alt="iphone picture"
                  class="img-fluid"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="/img/headphones.png"
                  alt="jbl headphones"
                  class="img-fluid"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="/img/laptop.png"
                  alt="microsoft laptop"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr />
    <!--CATEGORIES-->
    <div class="container-fluid text-center" id="categories">
      <h1 class="text-center">Shop by category</h1>
      <div class="row d-flex justify-content-evenly">
        <div class="col-lg-3">
          <div class="card">
            <img src="/img/phone_dark.png" class="card-img-top" alt="phone" />
            <div class="card-body">
              <p><strong>MOBILE PHONES</strong></p>
              <p>High class, high quality phones at affordable plrices</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <img
              src="/img/headphones_dark.png"
              class="card-img-top"
              alt="laptop"
            />
            <div class="card-body">
              <p><strong>AUDIO</strong></p>
              <p>
                High quality audio products from popular sound system brands
              </p>
            </div>
          </div>
          <a href="/products"><strong>Shop</strong></a>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <img
              src="/img/laptop_dark.png"
              class="card-img-top"
              alt="headphones"
            />
            <div class="card-body">
              <p><strong>LAPTOPS</strong></p>
              <p>All your laptop needs made available</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr />
    <!--FOOTER-->
    @include('layouts/footer')
  </body>
</html>
