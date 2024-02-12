<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/mobile_form.css" />
    <title>Edit laptop - Admin</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar_admin')
    <!--MOBILE FORM-->
    <div class="container-fluid" id="form_div">
        <h1 class="text-center mb-5" style="font-weight:bold">Edit {{$product -> name}} </h1>
    <form action="/admin/edit/laptop/{{$product -> product_id}}" method="POST">
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
                <td>Display:</td>
                <td><input type="text" name="display" value="{{$product -> display}}"/></td>
            </tr>
            <tr>
                <td>Graphics:</td>
                <td><input type="text" name="graphics" value="{{$product -> graphics}}"/></td>
            </tr>
            <tr>
                <td>USB ports:</td>
                <td><input type="text" name="usb_ports" value="{{$product -> usb_ports}}"/></td>
            </tr>
            <tr>
                <td>HDMI:</td>
                <td><input type="text" name="hdmi" value="{{$product -> hdmi}}"/></td>
            </tr>
            <tr>
                <td>RAM slots:</td>
                <td><input type="text" name="ram_slots" value="{{$product -> ram_slots}}"/></td>
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
