<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/admin_order_details.css" />
    <script src="/js/order_details.js"></script>
    <title>Order Details - Admin</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar_admin')
    @include('layouts/messages')
    <!--HEADER-->
    <h1 class="display-4 text-center" id="header">ORDER # {{$order_details[0] -> order_id}} </h1>
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
        @foreach ($order_details as $od)
        <tr>
          <td><img src="/img/products/{{$od -> image}}" style="width: 90px" alt="{{$od -> name}}" /></td>
          <td>{{$od -> name}}</td>
          <td id="price_{{$od -> product_id}}">₱ {{number_format($od -> price)}}</td>
          <td id="quantity_{{$od -> product_id}}">{{$od -> quantity}}</td>
          <td class="total" id="total_{{$od -> product_id}}"></td>
        </tr>
        @endforeach
        <tr id="gt_row">
          <td colspan="4" class="text-end"><strong>Grand total:</strong></td>
          <td>₱ <span id="gt_amount"><span></td>
        </tr>
      </table>
    </div>
    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-5">
          <p><strong>Status:</strong> {{$order_details[0] -> status}}</p>
          <p><strong>Shipping address:</strong> {{$order_details[0] -> shipping_address}}</p>
          <p><strong>Customer:</strong> {{$od -> first_name}} {{$od -> last_name}}</p>
        </div>
      </div>
      <div class="row text-center mb-4 mt-4">
        @if ($order_details[0] -> status == "waiting")
        <form action="/admin/orders/accept/{{$order_details[0] -> order_id}}" method="POST">
          @csrf
          @method('PUT')
          <input type="submit" class="btn btn-success" value="Accept"/>
        </form>
        @else
        <form action="/admin/orders/update/{{$order_details[0] -> order_id}}" method="POST">
          @csrf
          @method('PUT')
          <select name="status">
            <option value="accepted">Accepted</option>
            <option value="packed">Packed</option>
            <option value="delivering">Delivering</option>
            <option value="delivered">Delivered</option>
          </select>
          <input type="submit" class="btn btn-success" value="Update"/>
        </form>
        @endif
      </div>
    </div>
  </body>
</html>