<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/mobile_view.css" />
    <title>Mobile details - Admin</title>
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
          <th>Rear camera</th>
          <td>{{$product -> rear_cam_mp}}</td>
        </tr>
        <tr>
          <th>Front camera</th>
          <td>{{$product -> front_cam_mp}}</td>
        </tr>
        <tr>
          <th>Display</th>
          <td>{{$product -> display}}</td>
        </tr>
        <tr>
          <th>Battery capacity</th>
          <td>{{$product -> battery_capacity}}</td>
        </tr>
        <tr>
          <th>Charger</th>
          <td>{{$product -> charger}}</td>
        </tr>
        <tr>
          <th>USB interface</th>
          <td>{{$product -> usb_interface}}</td>
        </tr>
        <tr>
          <th>Sim slots</th>
          <td>{{$product -> sim_slots}}</td>
        </tr>
        <tr>
          <th>External memory</th>
          <td>{{$product -> external_memory}}</td>
        </tr>
        <tr>
          <th>Color</th>
          <td>{{$product -> color}}</td>
        </tr>
      </table>
    </div>
  </body>
</html>
