<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/mobile_form.css" />
    <title>Edit audio - Admin</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar_admin')
    <!--MOBILE FORM-->
    <div class="container-fluid" id="form_div">
        <h1 class="text-center mb-5" style="font-weight:bold">Edit {{$product -> name}} </h1>
    <form action="/admin/edit/audio/{{$product -> product_id}}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td colspan="2"><h2>Name and price</h2></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="product_name" value="{{$product -> name}}"/></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="number" name="product_price" value="{{$product -> price}}"/></td>
            </tr>
            <tr>
                <td colspan="2"><h2>Specifications</h2></td>
            </tr>
            <tr>
                <td>Battery life:</td>
                <td><input type="text" name="battery_life" value="{{$product -> battery_life}}"/></td>
            </tr>
            <tr>
                <td>Microphone:</td>
                <td><input type="text" name="microphone" value="{{$product -> microphone}}"/></td>
            </tr>
            <tr>
                <td>Noise cancellation:</td>
                <td><input type="text" name="noise_cancellation" value="{{$product -> noise_cancellation}}"/></td>
            </tr>
            <tr>
                <td>Additional features:</td>
                <td><input type="text" name="add_features" value="{{$product -> add_features}}"/></td>
            </tr>
            <tr>
                <td>Color:</td>
                <td><input type="text" name="color" value="{{$product -> color}}"/></td>
            </tr>
        </table>
        <div class="text-center mt-5 mb-3">
            <input type="submit" class="btn btn-warning" value="Edit product"/>
        </div>
    </form>
    </div>
  </body>
</html>
