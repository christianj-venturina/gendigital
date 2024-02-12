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
        <form action="/order/{{$product -> product_id}}" method="POST">
        @csrf
        <tr>
          <td><img src="/img/products/{{$product -> image}}" style="width: 90px" alt="{{$product -> name}}" /></td>
          <td>{{$product -> name}}</td>
          <td id="price_{{$product -> product_id}}">₱{{number_format($product -> price)}}</td>
          <td>
            <input
              type="number"
              style="width: 60px"
              value="1"
              min="1"
              class="quantity"
              id="quantity_{{$product -> product_id}}"
              name="product_quantity"
            />
          </td>
          <td class="total" id="total_{{$product -> product_id}}">₱{{number_format($product -> price)}}</td>
        </tr>
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