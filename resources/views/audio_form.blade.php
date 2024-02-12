<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/mobile_form.css" />
    <title>Add audio - Admin</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar_admin')
    <!--MOBILE FORM-->
    <div class="container-fluid" id="form_div">
        <h1 class="text-center mb-5" style="font-weight:bold">ADD AUDIO PRODUCT</h1>
    <form action="/admin/audio" method="POST" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td colspan="2"><h2>Name and price</h2></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="product_name"/></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><input type="number" name="product_price"/></td>
            </tr>
            <tr>
                <td colspan="2"><h2>Specifications</h2></td>
            </tr>
            <tr>
                <td>Battery life:</td>
                <td><input type="text" name="battery_life"/></td>
            </tr>
            <tr>
                <td>Microphone:</td>
                <td><input type="text" name="microphone"/></td>
            </tr>
            <tr>
                <td>Noise cancellation:</td>
                <td><input type="text" name="noise_cancellation"/></td>
            </tr>
            <tr>
                <td>Additional features:</td>
                <td><input type="text" name="add_features"/></td>
            </tr>
            <tr>
                <td>Color:</td>
                <td><input type="text" name="color"/></td>
            </tr>
            <tr>
                <td colspan="2"><h2>Photos</h2></td>
            </tr>
            <tr>
                <td>Product photo:</td>
                <td><input type="file" name="product_photo"/></td>
            </tr>
            <tr>
                <td>Shop photo:</td>
                <td><input type="file" name="shop_photo"/></td>
            </tr>
        </table>
        <div class="text-center mt-5 mb-3">
            <input type="submit" class="btn btn-success" value="Add product"/>
        </div>
    </form>
    </div>
  </body>
</html>
