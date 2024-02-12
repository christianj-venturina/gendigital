<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/products.css" />
    <script src="js/products.js"></script>
    <title>Products - GenDigital</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar')
    @include('layouts/messages')
    <!--HEADER-->
    <h1 class="display-4 text-center" id="header">ALL PRODUCTS</h1>
    <!--PRODUCTS SECTION-->
    <div class="container-fluid">
      <div class="row text-center">
        @foreach ($products as $p)
        <div class="col-lg-4 mb-5" id="{{$p -> product_id}}">
          <img src="/img/products/{{$p -> image}}" class="img-fluid" alt="{{$p -> name}}" id="{{$p -> category_id}}" />
          <p>{{$p -> name}}</p>
          <p>₱ {{number_format($p -> price)}}</p>
        </div>
        @endforeach
      </div>
    </div>
    <hr />
    <!--FOOTER-->
    @include('layouts/footer')
  </body>
</html>
