<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/sign_in.css" />
    <title>Register - GenDigital</title>
  </head>
  <body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light col-lg-12 mb-4">
      <div class="container-fluid">
        <!--Logo-->
        <a class="navbar-brand" href="/"
          ><img
            src="img/logo.png"
            class="logo"
            style="width: 200px"
            alt="GenDigital logo"
        /></a>
      </div>
    </nav>
    <!--HEADER-->
    <h1 class="display-4 text-center mt-5 mb-5" id="header">REGISTER</h1>
    <!--REGISTER FORM-->
    <div class="container" id="sign_in_div">
      <div class="row d-flex justify-content-evenly">
        <div class="col-lg-6">
          <form action="/register" method="POST">
            @csrf
            <label>First name:</label>
            <input type="text" name="first_name" class="form-control" />
            <label class="mt-3">Last name:</label>
            <input type="text" name="last_name" class="form-control" />
            <label class="mt-3">Shipping address:</label>
            <input type="text" name="shipping_address" class="form-control" />
            <label class="mt-3">Email address:</label>
            <input type="email" name="email" class="form-control" />
            <label class="mt-3">Password:</label>
            <input type="password" class="form-control" name="pw" />
            <div class="text-center" id="buttons_div">
            <input type="submit" value="Register" id="sign_in" />
          </div>
          </form>
        </div>
      </div>
    </div>
    <hr />
    <!--FOOTER-->
    @include('layouts/footer')
  </body>
</html>
