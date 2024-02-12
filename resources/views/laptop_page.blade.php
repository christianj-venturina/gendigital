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
          <th>OS</th>
          <td>{{$product -> operating_system}}</td>
        </tr>
        <tr>
          <th>Processor</th>
          <td>{{$product -> processor}}</td>
        </tr>
        <tr>
          <th>Memory</th>
          <td>{{$product -> memory}}</td>
        </tr>
        <tr>
          <th>Storage</th>
          <td>{{$product -> storage}}</td>
        </tr>
        <tr>
          <th>Display</th>
          <td>{{$product -> display}}</td>
        </tr>
        <tr>
          <th>Graphics</th>
          <td>{{$product -> graphics}}</td>
        </tr>
        <tr>
          <th>USB Ports</th>
          <td>{{$product -> usb_ports}}</td>
        </tr>
        <tr>
          <th>HDMI</th>
          <td>{{$product -> hdmi}}</td>
        </tr>
        <tr>
          <th>Ram Slots</th>
          <td>{{$product -> ram_slots}}</td>
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
