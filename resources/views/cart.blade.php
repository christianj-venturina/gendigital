<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/checkout.css" />
    <title>Cart - GenDigital</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar')
    @include('layouts/messages')
    <!--HEADER-->
    <h1 class="display-4 text-center" id="header">CART</h1>
    <!--CART ITEMS-->
    <div class="container text-center" id="order_summary">
      @if (count($cart_products) > 0)
      <table class="table">
        <tr>
          <th></th>
          <th>Image</th>
          <th>Name</th>
          <th>Price per unit</th>
        </tr>
        @foreach ($cart_products as $cp)
        <tr>
          <td>
            <form action="/cart/delete/{{$cp -> product_id}}" method="POST">
              @csrf
              @method('DELETE')
              <input type="submit" value="x" class="delete"/>
            </form>
          </td>
          <td><img src="/img/products/{{$cp -> image}}" style="width: 90px" alt="{{$cp -> name}}" /></td>
          <td>{{$cp -> name}}</td>
          <td>₱ {{number_format($cp -> price)}}</td>
        </tr>
        @endforeach
      </table>
      <a href="/checkout/cart" id="shop_link"><strong>Buy now</strong></a>
      @else
      <p>You haven't added any products to your cart. Click <a href="/products">here</a> to start adding!</p>
      @endif
    </div>
    <hr />
    <!--FOOTER-->
    @include('layouts/footer')
  </body>
</html>