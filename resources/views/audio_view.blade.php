<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/mobile_view.css" />
    <title>Audio details - Admin</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar_admin')
    @include('layouts/messages')
    <!--PRODUCT PICTURES-->
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-lg-6">
                <img src="/img/products/{{$product -> spi}}" class="img-fluid" alt="{{$product -> name}}"/>
                <p>SHOP PHOTO</p>
            </div>
            <div class="col-lg-6">
                <img src="/img/products/{{$product -> ppi}}" class="img-fluid" alt="{{$product -> name}}" style="width: 300px"/>
                <p>PRODUCT PAGE PHOTO</p>
            </div>
        </div>
    </div>
    <!--PRODUCT DETAILS-->
    <div class="container mt-5">
    <table class="table">
        <tr>
          <th>Name</th>
          <td>{{$product -> name}}</td>
        </tr>
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
    </div>
  </body>
</html>
