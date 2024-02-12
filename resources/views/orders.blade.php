<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/checkout.css" />
    <title>Orders - GenDigital</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar')
    <!--HEADER-->
    <h1 class="display-4 text-center" id="header">ORDERS</h1>
    <!--ORDERS-->
    <div class="container text-center" id="order_summary">
      @if (count($orders) > 0)
      <table class="table">
        <tr>
          <th>Order #</th>
          <th>Transaction date</th>
          <th>Status</th>
          <th>Details</th>
        </tr>
        @foreach ($orders as $o)
        <tr>
          <td>{{$o -> order_id}}</td>
          <td>{{$o->time_placed->format('Y-m-d')}}</td>
          <td>{{$o -> status}}</td>
          <td><a href="/orders/details/{{$o -> order_id}}" class="view">View</a></td>
        </tr>
        @endforeach
      </table>
      @else
      <p>You haven't made a purchase. Click <a href="/products">here</a> to start shopping!</p>
      @endif
    </div>
    <hr />
    <!--FOOTER-->
    @include('layouts/footer')
  </body>
</html>