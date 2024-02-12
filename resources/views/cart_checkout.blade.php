<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/checkout.css" />
    <script src="/js/checkout.js"></script>
    <title>Checkout - GenDigital</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar')
    <!--HEADER-->
    <h1 class="display-4 text-center" id="header">CHECK OUT</h1>
    <!--ORDER SUMMARY-->
    <div class="container text-center" id="order_summary">
      <table class="table">
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Price per unit</th>
          <th>Quantity</th>
          <th>Total Price</th>
        </tr>
        <form action="/order/cart" method="POST">
          @csrf
        @foreach ($cart_products as $cp)
        <tr>
          <td><img src="/img/products/{{$cp -> image}}" style="width: 90px" alt="{{$cp -> name}}" /></td>
          <td>{{$cp -> name}}</td>
          <td id="price_{{$cp -> product_id}}">₱{{number_format($cp -> price)}}</td>
          <td>
            <input
              type="number"
              style="width: 60px"
              value="1"
              min="1"
              class="quantity"
              id="quantity_{{$cp -> product_id}}"
              name="product_quantity_{{$cp -> product_id}}"
            />
          </td>
          <td class="total" id="total_{{$cp -> product_id}}">₱{{number_format($cp -> price)}}</td>
        </tr>
        @endforeach
        <tr id="gt_row">
          <td colspan="4" class="text-end"><strong>Grand total:</strong></td>
          <td>₱<span id="gt_amount"></span></td>
        </tr>
      </table>
        <input type="submit" value="Place order" id="place_order"/>
      </form>
    </div>
    <hr />
    <!--FOOTER-->
    @include('layouts/footer')
  </body>
</html>