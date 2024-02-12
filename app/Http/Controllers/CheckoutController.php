<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Product;
use App\Models\CustomerCart;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function show_dashboard()
    {
        $category_orders = OrderProduct::query()
        ->select(DB::raw('COUNT(*) AS category_orders'))
        ->join('products', 'order_products.product_id', '=', 'products.product_id')
        ->groupBy('category_id')
        ->get();

        $entries = [];

        foreach($category_orders as $co) {
            array_push($entries, $co->category_orders);
        }
        $data = [
            'labels' => ['Mobile', 'Audio', 'Laptops'],
            'data' => $entries,
        ];

        $category_add = CustomerCart::query()
        ->select(DB::raw('COUNT(*) AS category_add'))
        ->join('products', 'customer_carts.product_id', '=', 'products.product_id')
        ->groupBy('category_id')
        ->get();

        $add_entries = [];

        foreach($category_add as $ca) {
            array_push($add_entries, $ca->category_add);
        }
        $data_2 = [
            'labels' => ['Mobile', 'Audio', 'Laptops'],
            'data' => $add_entries,
        ];

        $category_pie = Product::query()
        ->select(DB::raw('COUNT(*) AS product_categories'))
        ->groupBy('category_id')
        ->get();

        $pie_entries = [];

        foreach($category_pie as $cp) {
            array_push($pie_entries, $cp->product_categories);
        }
        $data_3 = [
            'labels' => ['Mobile', 'Audio', 'Laptops'],
            'data' => $pie_entries,
        ];

        return view('admin_dashboard', compact('data', 'data_2', 'data_3'));
    }

    public function checkout_product(string $id)
    {
        $product = Product::query()
            ->select('*')
            ->join('shop_photos', 'products.product_id', '=', 'shop_photos.product_id')
            ->where('products.product_id', '=', $id)
            ->get()
            ->first();
            
        return view('checkout', compact('product'));
    }

    public function add_to_cart(string $id)
    {
        $product = Product::query()
        ->select('product_id', 'name')
        ->where('product_id', '=', $id)
        ->get()
        ->first();

        $cart_product = new CustomerCart;
        $cart_product->user_id = Session::get('user_id');
        $cart_product->name = $product->name;
        $cart_product->product_id = $product->product_id;
        $cart_product->save();

        return redirect ('/products')->with('success', 'Product added to cart!');
    }

    public function view_cart ()
    {
        $cart_products = CustomerCart::query()
        ->select('*')
        ->join('products', 'customer_carts.product_id', '=', 'products.product_id')
        ->join('shop_photos', 'products.product_id', '=', 'shop_photos.product_id')
        ->where('user_id', '=', Session::get('user_id'))
        ->get();

        return view('cart', compact('cart_products'));
    }

    public function delete_cart_product (string $id)
    {
        $cart_product = CustomerCart::query()
        ->where('product_id', '=', $id )
        ->where('user_id', '=', Session::get('user_id'))
        ->delete();

        return redirect('/cart')->with('success', 'Product removed from cart');
    }
    
    public function checkout_cart ()
    {
        $cart_products = CustomerCart::query()
        ->select('*')
        ->join('products', 'customer_carts.product_id', '=', 'products.product_id')
        ->join('shop_photos', 'products.product_id', '=', 'shop_photos.product_id')
        ->where('user_id', '=', Session::get('user_id'))
        ->get();

        return view('cart_checkout', compact('cart_products'));
    }

    public function place_order (Request $r, string $id)
    {
        $product = Product::query()
        ->select('*')
        ->where('product_id', '=', $id)
        ->get()
        ->first();

        $order = new Order;
        $order->user_id = Session::get('user_id');
        $order->save();

        $op = new OrderProduct;
        $op->order_id = $order->order_id;
        $op->name = $product->name;
        $op->product_id = $product->product_id;
        $op->quantity = $r->input('product_quantity');
        $op->save();

        return redirect ('/products')->with('success', 'Order placed! Continue shopping!');
    }

    public function place_order_cart (Request $r)
    {
        $cart_products = CustomerCart::query()
        ->select('*')
        ->join('products', 'customer_carts.product_id', '=', 'products.product_id')
        ->where('user_id', '=', Session::get('user_id'))
        ->get();

        $order = new Order;
        $order->user_id = Session::get('user_id');
        $order->save();

        for ($i = 0; $i < count($cart_products); $i++) {
            $op = new OrderProduct;
            $op->order_id = $order->order_id;
            $op->name = $cart_products[$i]->name;
            $op->product_id = $cart_products[$i]->product_id;
            $op->quantity = $r->input('product_quantity_' . $cart_products[$i]->product_id);
            $op->save();
        }

        return redirect ('/products')->with('success', 'Order placed! Continue shopping!');
    }

    public function view_orders ()
    {
        $orders = Order::query()
        ->select('*')
        ->where('user_id', '=', Session::get('user_id'))
        ->get();

        return view ('orders', compact('orders'));
    }

    public function order_details (string $id)
    {
        $order_products = OrderProduct::query()
        ->select('*')
        ->join('products', 'order_products.product_id', '=', 'products.product_id')
        ->join('shop_photos', 'products.product_id', '=', 'shop_photos.product_id')
        ->where('order_id', '=', $id)
        ->get();

        return view('order_details', compact('order_products'));
    }

    public function view_orders_admin()
    {
        $orders = Order::query()
        ->select('*')
        ->join('users', 'orders.user_id', '=', 'users.user_id')
        ->get();

        return view('admin_orders', compact('orders'));
    }

    public function orders_details_admin(string $id)
    {
        $order_details = Order::query()
        ->select('*')
        ->join('order_products', 'orders.order_id', '=', 'order_products.order_id')
        ->join('products', 'order_products.product_id', '=', 'products.product_id')
        ->join('shop_photos', 'products.product_id', '=', 'shop_photos.product_id')
        ->join('users', 'orders.user_id', '=', 'users.user_id')
        ->where('orders.order_id', '=', $id)
        ->get();

        return view('admin_orders_details', compact('order_details'));
    }

    public function order_accept(string $id)
    {
        $order = Order::where('order_id', '=', $id)
            ->update(
                [
                    'status' => 'accepted'
                ]
            );

            return redirect('/admin/orders/details/' . $id)->with('success', 'Order accepted!');
    }

    public function order_update(Request $r, string $id)
    {
        $order = Order::where('order_id', '=', $id)
        ->update(
            [
                'status' => $r->input('status')
            ]
        );

        return redirect('/admin/orders/details/' . $id)->with('success', 'Order status updated!');
    }
}
