<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/laptop_page.css" />
    <title>Product - GenDigital</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar')
    <!--HERO-->
    <div class="container" id="hero">
      <div class="row">
        <div class="col-lg-6" id="hero_left_div">
          <h1 style="font-size: 60px">{{$product -> name}}</h1>
          <p class="mb-5" style="font-size: large">
            <strong>₱ {{number_format($product -> price)}}</strong>
          </p>
          <div>
            <a href="/checkout/{{$product -> product_id}}"><strong>Buy now</strong></a>
            <form class="add_cart_form" action="/cart/{{$product -> product_id}}" method="POST">
              @csrf
              <input type="submit" value="Add to cart" class="add_cart_input"/>
            </form>
          </div>
        </div>
        <div class="col-lg-6 text-end">
          <img src="/img/products/{{$product -> image}}" class="img-fluid" alt="{{$product -> name}}" />
        </div>
      </div>
    </div>
    <hr />
    <!--SPECIFICATIONS-->
    <div class="container text-center" id="specifications">
      <h1>Specifications</h1>
      <table class="table text-start">
        <tr>
          <th>Battery Life</th>
          <td>{{$product -> battery_life}}</td>
        </tr>
        <tr>
          <th>Microphone</th>
          <td>{{$product -> microphone}}</td>
        </tr>
        <tr>
          <th>Noise Cancellation</th>
          <td>{{$product -> noise_cancellation}}</td>
        </tr>
        <tr>
          <th>Additional Features</th>
          <td>{{$product -> add_features}}</td>
        </tr>
        <tr>
          <th>Color</th>
          <td>{{$product -> color}}</td>
        </tr>
      </table>
      <a href="/checkout/{{$product -> product_id}}"><strong>Buy now</strong></a>
      <form class="add_cart_form" action="/cart/{{$product -> product_id}}" method="POST">
        @csrf
        <input type="submit" value="Add to cart" class="add_cart_input"/>
      </form>
    </div>
    <hr />
    <!--FOOTER-->
    @include('layouts/footer')
  </body>
</html>
