<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/mobile_form.css" />
    <title>Edit mobile - Admin</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar_admin')
    <!--MOBILE FORM-->
    <div class="container-fluid" id="form_div">
        <h1 class="text-center mb-5" style="font-weight:bold">Edit {{$product -> name}} </h1>
    <form action="/admin/edit/mobile/{{$product -> product_id}}" method="POST">
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
                <td>Operating system:</td>
                <td><input type="text" name="operating_system" value="{{$product -> operating_system}}"/></td>
            </tr>
            <tr>
                <td>Processor:</td>
                <td><input type="text" name="processor" value="{{$product -> processor}}"/></td>
            </tr>
            <tr>
                <td>Memory:</td>
                <td><input type="text" name="memory" value="{{$product -> memory}}"/></td>
            </tr>
            <tr>
                <td>Storage:</td>
                <td><input type="text" name="storage" value="{{$product -> storage}}"/></td>
            </tr>
            <tr>
                <td>Rear camera:</td>
                <td><input type="text" name="rear_cam" value="{{$product -> rear_cam_mp}}"/></td>
            </tr>
            <tr>
                <td>Front camera:</td>
                <td><input type="text" name="front_camera" value="{{$product -> front_cam_mp}}"/></td>
            </tr>
            <tr>
                <td>Display:</td>
                <td><input type="text" name="display" value="{{$product -> display}}"/></td>
            </tr>
            <tr>
                <td>Battery capacity:</td>
                <td><input type="text" name="battery_capacity" value="{{$product -> battery_capacity}}"/></td>
            </tr>
            <tr>
                <td>Charger:</td>
                <td><input type="text" name="charger" value="{{$product -> charger}}"/></td>
            </tr>
            <tr>
                <td>USB interface:</td>
                <td><input type="text" name="usb_interface" value="{{$product -> usb_interface}}"/></td>
            </tr>
            <tr>
                <td>Sim slots:</td>
                <td><input type="text" name="sim_slots" value="{{$product -> sim_slots}}"/></td>
            </tr>
            <tr>
                <td>External memory:</td>
                <td><input type="text" name="external_memory" value="{{$product -> external_memory}}"/></td>
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
