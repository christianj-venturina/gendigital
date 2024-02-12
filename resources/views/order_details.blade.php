<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/checkout.css" />
    <script src="/js/order_details.js"></script>
    <title>Order Details - GenDigital</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar')
    <!--HEADER-->
    <h1 class="display-4 text-center" id="header">ORDER # {{$order_products[0] -> order_id}} </h1>
    <!--ORDER DETAILS-->
    <div class="container text-center" id="order_summary">
      <table class="table">
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Price per unit</th>
          <th>Quantity</th>
          <th>Total Price</th>
        </tr>
        @foreach ($order_products as $op)
        <tr>
          <td><img src="/img/products/{{$op -> image}}" style="width: 90px" alt="{{$op -> name}}" /></td>
          <td>{{$op -> name}}</td>
          <td id="price_{{$op -> product_id}}">₱ {{number_format($op -> price)}}</td>
          <td id="quantity_{{$op -> product_id}}">{{$op -> quantity}}</td>
          <td class="total" id="total_{{$op -> product_id}}"></td>
        </tr>
        @endforeach
        <tr id="gt_row">
          <td colspan="4" class="text-end"><strong>Grand total:</strong></td>
          <td>₱ <span id="gt_amount"></span></td>
        </tr>
      </table>
    </div>
    <hr />
    <!--FOOTER-->
    @include('layouts/footer')
  </body>
</html>