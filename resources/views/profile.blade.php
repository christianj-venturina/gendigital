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
    <h1 class="display-4 text-center" id="header">PROFILE</h1>
    <div class="container" style="margin-bottom: 70px">
        <table class="table">
            <tr>
                <th>Customer ID:</th>
                <td>{{$customer -> user_id}}</td>
            </tr>
            <tr>
                <th>First name:</th>
                <td>{{$customer -> first_name}}</td>
            </tr>
            <tr>
                <th>Last name:</th>
                <td>{{$customer -> last_name}}</td>
            </tr>
            <tr>
                <th>Email address:</th>
                <td>{{$customer -> email}}</td>
            </tr>
            <tr>
                <th>Shipping address:</th>
                <td>{{$customer -> shipping_address}}</td>
            </tr>
        </table>
    </div>
    <div class="text-center mb-5">
            <a href="/profile/edit" class="btn" id="edit_profile">Edit profile</a>
    </div>
    <hr />
    <!--FOOTER-->
    @include('layouts/footer')
  </body>
</html>
