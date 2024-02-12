<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts/head')
    <link rel="stylesheet" href="/css/admin_products.css" />
    <script src="/js/admin_products.js"></script>
    <title>Products - Admin</title>
  </head>
  <body>
    <!--NAVBAR-->
    @include('layouts/navbar_admin')
    @include('layouts/messages')
    <!--PRODUCT LIST-->
    <div class="container-fluid" id="products_list">
      <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add">Add new product</a>
      <div class="modal fade" id="add" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">What type of product will you add?</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body text-center"><a href="/admin/mobile/form" class="btn btn-success">Mobile</a><a href="/admin/audio/form" class="btn btn-success ms-4 me-4">Audio</a><a href="/admin/laptop/form" class="btn btn-success">Laptop</a></div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
      <table class="table text-center mt-3">
        <tr>
          <th>Product ID</th>
          <th>Name</th>
          <th>Price</th>
          <th>Category ID</th>
          <th>View</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        @foreach ($products as $p)
        <tr>
          <td>{{$p -> product_id}}</td>
          <td>{{$p -> name}}</td>
          <td>₱ {{number_format($p -> price)}}</td>
          <td>{{$p -> category_id}}</td>
          <td id="{{$p -> category_id}}"><a class="btn btn-primary view" id="{{$p -> product_id}}">View</a></td>
          <td id="{{$p -> category_id}}"><a class="btn btn-warning edit" id="{{$p -> product_id}}">Edit</a></td>
          <td><a href="#" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#delete_{{$p -> product_id}}">Delete</a></td>
          <div class="modal fade" id="delete_{{$p -> product_id}}" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{$p -> name}}</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">This product will be deleted in the database. Do you want to continue?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                        </button>
                        @if ($p -> category_id == 1)
                        <form action="/admin/delete/mobile/{{$p -> product_id}}" method="POST">
                          @csrf
                          @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Delete"/>
                        </form>
                        @elseif ($p -> category_id == 2)
                        <form action="/admin/delete/audio/{{$p -> product_id}}" method="POST">
                          @csrf
                          @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Delete"/>
                        </form>
                        @else
                        <form action="/admin/delete/laptop/{{$p -> product_id}}" method="POST">
                          @csrf 
                          @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Delete"/>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </tr>
        @endforeach
      </table>
    </div>
  </body>
</html>
