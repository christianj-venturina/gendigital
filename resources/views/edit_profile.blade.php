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
    <h1 class="display-4 text-center" id="header" style="margin-bottom: 100px"> EDIT PROFILE</h1>
    <div class="container" style="margin-bottom: 70px">
    <form action="/profile/edit" method="POST">
        @csrf
        @method('PUT')
        <table class="table">
            <tr>
                <th>First name:</th>
                <td><input type="text" name="first_name" class="form-control" value="{{$customer -> first_name}}"/></td>
            </tr>
            <tr>
                <th>Last name:</th>
                <td><input type="text" name="last_name" class="form-control" value="{{$customer -> last_name}}"/></td>
            </tr>
            <tr>
                <th>Email address:</th>
                <td><input type="text" name="email" class="form-control" value="{{$customer -> email}}"/></td>
            </tr>
            <tr>
                <th>Shipping address:</th>
                <td><input type="text" name="shipping_address" class="form-control" value="{{$customer -> shipping_address}}"/></td>
            </tr>
        </table>
        <div class="text-center mt-5">
            <input type="submit" class="btn" id="edit_profile" value="Edit"/>
        </div>
    </form>
    </div>
    <hr />
    <!--FOOTER-->
    @include('layouts/footer')
  </body>
</html>
