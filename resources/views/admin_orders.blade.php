<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/admin_products.css" />
    <script src="/js/admin_products.js"></script>
    <title>Products - Admin</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar_admin')
    @include('layouts/messages')
    <!--PRODUCT LIST-->
    <div class="container-fluid" id="products_list">
      <table class="table text-center mt-5">
        <tr>
          <th>Order ID</th>
          <th>Date</th>
          <th>Customer</th>
          <th>User ID</th>
          <th>Shipping address</th>
          <th>Status</th>
          <th>Details</th>
        </tr>
        @foreach ($orders as $o)
        <tr>
            <td>{{$o -> order_id}}</td>
            <td>{{$o -> time_placed->format('Y-m-d')}}</td>
            <td>{{$o -> first_name}} {{$o -> last_name}}</td>
            <td>{{$o -> user_id}}</td>
            <td>{{$o -> shipping_address}}</td>
            <td>{{$o -> status}}</td>
            <td><a href="/admin/orders/details/{{$o -> order_id}}" class="btn bg-dark text-white">View</a></td>
        </tr>
        @endforeach
      </table>
    </div>
  </body>
</html>
