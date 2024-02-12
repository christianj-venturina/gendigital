<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/mobile_form.css" />
    <title>Add mobile - Admin</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar_admin')
    <!--MOBILE FORM-->
    <div class="container-fluid" id="form_div">
        <h1 class="text-center mb-5" style="font-weight:bold">ADD MOBILE PRODUCT</h1>
    <form action="/admin/mobile" method="POST" enctype="multipart/form-data">
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
                <td>Operating system:</td>
                <td><input type="text" name="operating_system"/></td>
            </tr>
            <tr>
                <td>Processor:</td>
                <td><input type="text" name="processor"/></td>
            </tr>
            <tr>
                <td>Memory:</td>
                <td><input type="text" name="memory"/></td>
            </tr>
            <tr>
                <td>Storage:</td>
                <td><input type="text" name="storage"/></td>
            </tr>
            <tr>
                <td>Rear camera:</td>
                <td><input type="text" name="rear_cam"/></td>
            </tr>
            <tr>
                <td>Front camera:</td>
                <td><input type="text" name="front_camera"/></td>
            </tr>
            <tr>
                <td>Display:</td>
                <td><input type="text" name="display"/></td>
            </tr>
            <tr>
                <td>Battery capacity:</td>
                <td><input type="text" name="battery_capacity"/></td>
            </tr>
            <tr>
                <td>Charger:</td>
                <td><input type="text" name="charger"/></td>
            </tr>
            <tr>
                <td>USB interface:</td>
                <td><input type="text" name="usb_interface"/></td>
            </tr>
            <tr>
                <td>Sim slots:</td>
                <td><input type="text" name="sim_slots"/></td>
            </tr>
            <tr>
                <td>External memory:</td>
                <td><input type="text" name="external_memory"/></td>
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
