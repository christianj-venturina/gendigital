<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/admin_sign_in.css" />
    <title>Sign in - Admin</title>
  </head>
  <body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light col-lg-12 mb-4">
      <div class="container-fluid">
        <!--Logo-->
        <a class="navbar-brand" href="#"
          ><img
            src="img/logo.png"
            class="logo"
            style="width: 200px"
            alt="GenDigital logo"
          />
          - Admin</a
        >
      </div>
    </nav>
    @include('layouts/messages')
    <!--HEADER-->
    <h1 class="display-4 text-center mt-5 mb-5" id="header">SIGN IN</h1>
    <!--SIGN IN FORM-->
    <div class="container" id="sign_in_div">
      <div class="row d-flex justify-content-evenly">
        <div class="col-lg-6">
          <form action="/admin" method="POST">
            @csrf
            <label>Email address:</label>
            <input type="email" class="form-control" name="email" />
            <label class="mt-3">Password:</label>
            <input type="password" class="form-control" name="pw" />
            <div class="text-center mt-5">
              <input type="submit" value="Sign in" id="sign_in" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
