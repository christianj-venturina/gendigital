<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Product;
use App\Models\MobileSpec;
use App\Models\AudioSpec;
use App\Models\LaptopSpec;
use App\Models\ProductPhoto;
use App\Models\ShopPhoto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function products()
    {
        // $products = DB::select("SELECT name, price FROM products");

        $products = Product::query()
            ->select('*')
            ->join('shop_photos', 'products.product_id', '=', 'shop_photos.product_id')
            ->inRandomOrder()
            ->get();
        return view('products', compact('products'));
    }

    public function products_d(string $id)
    {
        $products = Product::query()
        ->select('*')
        ->join('shop_photos', 'products.product_id', '=', 'shop_photos.product_id')
        ->where('category_id', '=', $id)
        ->get();

        return view('products_d', compact('products'));
    }

    public function laptop_page(string $id)
    {
        $product = Product::query()
        ->select('*')
        ->join('laptop_specs', 'products.product_id', '=', 'laptop_specs.product_id')
        ->join('product_photos', 'laptop_specs.product_id', '=', 'product_photos.product_id')
        ->where('products.product_id', '=', $id)
        ->get()
        ->first();
        return view('laptop_page', compact('product'));
    }

    public function mobile_page(string $id)
    {
        $product = Product::query()
        ->select('*')
        ->join('mobile_specs', 'products.product_id', '=', 'mobile_specs.product_id')
        ->join('product_photos', 'mobile_specs.product_id', '=', 'product_photos.product_id')
        ->where('products.product_id', '=', $id)
        ->get()
        ->first();
        return view('mobile_page', compact('product'));
    }

    public function audio_page(string $id)
    {
        $product = Product::query()
        ->select('*')
        ->join('audio_specs', 'products.product_id', '=', 'audio_specs.product_id')
        ->join('product_photos', 'audio_specs.product_id', '=', 'product_photos.product_id')
        ->where('products.product_id', '=', $id)
        ->get()
        ->first();
        return view('audio_page', compact('product'));
    }

    public function admin_products()
    {
        $products = Product::query()
        ->select('*')
        ->orderBy('product_id', 'DESC')
        ->get();

        return view('admin_products', compact('products'));
    }

    public function add_mobile_form()
    {
        return view ('mobile_form');
    }

    public function add_mobile (Request $r)
    {
        $product = new Product;
        $product->name = $r->input('product_name');
        $product->price = $r->input('product_price');
        $product->category_id = 1;
        $product->save();

        $specs = new MobileSpec;
        $specs->product_id = $product->product_id;
        $specs->operating_system = $r->input('operating_system');
        $specs->processor = $r->input('processor');
        $specs->memory = $r->input('memory');
        $specs->storage = $r->input('storage');
        $specs->rear_cam_mp = $r->input('rear_cam');
        $specs->front_cam_mp = $r->input('front_camera');
        $specs->display = $r->input('display');
        $specs->battery_capacity = $r->input('battery_capacity');
        $specs->charger = $r->input('charger');
        $specs->usb_interface = $r->input('usb_interface');
        $specs->sim_slots = $r->input('sim_slots');
        $specs->external_memory = $r->input('external_memory');
        $specs->color = $r->input('color');
        $specs->save();

        $photo = new ProductPhoto;
        $photo->product_id = $product->product_id;
        if ($r->file('product_photo')){
            $file = $r->file('product_photo');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $photo->image = $filename;
        }
        $photo->save();

        $shop_photo = new ShopPhoto;
        $shop_photo->product_id = $product->product_id;
        if ($r->file('shop_photo')){
            $file = $r->file('shop_photo');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $shop_photo->image = $filename;
        }
        $shop_photo->save();

        return redirect ('/admin/products')->with('success', 'New mobile product successfully added!');
    }

    public function add_audio_form ()
    {
        return view ('audio_form');
    }

    public function add_audio (Request $r)
    {
        $product = new Product;
        $product->name = $r->input('product_name');
        $product->price = $r->input('product_price');
        $product->category_id = 2;
        $product->save();

        $specs = new AudioSpec;
        $specs->product_id = $product->product_id;
        $specs->battery_life = $r->input('battery_life');
        $specs->microphone = $r->input('microphone');
        $specs->noise_cancellation = $r->input('noise_cancellation');
        $specs->add_features = $r->input('add_features');
        $specs->color = $r->input('color');
        $specs->save();

        $photo = new ProductPhoto;
        $photo->product_id = $product->product_id;
        if ($r->file('product_photo')){
            $file = $r->file('product_photo');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $photo->image = $filename;
        }
        $photo->save();

        $shop_photo = new ShopPhoto;
        $shop_photo->product_id = $product->product_id;
        if ($r->file('shop_photo')){
            $file = $r->file('shop_photo');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $shop_photo->image = $filename;
        }
        $shop_photo->save();

        return redirect ('/admin/products')->with('success', 'New audio product successfully added!');
    }

    public function add_laptop_form ()
    {
        return view('laptop_form');
    }

    public function add_laptop (Request $r)
    {
        $product = new Product;
        $product->name = $r->input('product_name');
        $product->price = $r->input('product_price');
        $product->category_id = 3;
        $product->save();

        $specs = new LaptopSpec;
        $specs->product_id = $product->product_id;
        $specs->operating_system = $r->input('operating_system');
        $specs->processor = $r->input('processor');
        $specs->memory = $r->input('memory');
        $specs->storage = $r->input('storage');
        $specs->display = $r->input('display');
        $specs->graphics = $r->input('graphics');
        $specs->usb_ports = $r->input('usb_ports');
        $specs->hdmi = $r->input('hdmi');
        $specs->ram_slots = $r->input('ram_slots');
        $specs->color = $r->input('color');
        $specs->save();

        $photo = new ProductPhoto;
        $photo->product_id = $product->product_id;
        if ($r->file('product_photo')){
            $file = $r->file('product_photo');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $photo->image = $filename;
        }
        $photo->save();

        $shop_photo = new ShopPhoto;
        $shop_photo->product_id = $product->product_id;
        if ($r->file('shop_photo')){
            $file = $r->file('shop_photo');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $shop_photo->image = $filename;
        }
        $shop_photo->save();

        return redirect ('/admin/products')->with('success', 'New laptop product successfully added!');
    }

    public function view_mobile (string $id)
    {
        $product = Product::query()
        ->select('*', 'shop_photos.image AS spi', 'product_photos.image AS ppi')
        ->join('mobile_specs', 'products.product_id', '=', 'mobile_specs.product_id')
        ->join('product_photos', 'mobile_specs.product_id', '=', 'product_photos.product_id')
        ->join('shop_photos', 'product_photos.product_id', '=', 'shop_photos.product_id')
        ->where('products.product_id', '=', $id)
        ->get()
        ->first();

        return view('mobile_view', compact('product'));
    }

    public function view_audio (string $id)
    {
        $product = Product::query()
        ->select('*', 'shop_photos.image AS spi', 'product_photos.image AS ppi')
        ->join('audio_specs', 'products.product_id', '=', 'audio_specs.product_id')
        ->join('product_photos', 'audio_specs.product_id', '=', 'product_photos.product_id')
        ->join('shop_photos', 'product_photos.product_id', '=', 'shop_photos.product_id')
        ->where('products.product_id', '=', $id)
        ->get()
        ->first();

        return view('audio_view', compact('product'));
    }

    public function view_laptop (string $id)
    {
        $product = Product::query()
        ->select('*', 'shop_photos.image AS spi', 'product_photos.image AS ppi')
        ->join('laptop_specs', 'products.product_id', '=', 'laptop_specs.product_id')
        ->join('product_photos', 'laptop_specs.product_id', '=', 'product_photos.product_id')
        ->join('shop_photos', 'product_photos.product_id', '=', 'shop_photos.product_id')
        ->where('products.product_id', '=', $id)
        ->get()
        ->first();

        return view('laptop_view', compact('product'));
    }

    public function edit_mobile_form(string $id)
    {
        $product = Product::query()
        ->select('*')
        ->join('mobile_specs', 'products.product_id', '=', 'mobile_specs.product_id')
        ->where('products.product_id', '=', $id)
        ->get()
        ->first();

        return view('mobile_edit', compact('product'));
    }

    public function edit_mobile (Request $r, string $id)
    {
        $product = Product::where('product_id', '=', $id)
            ->update(
                [
                    'name' => $r->input('product_name'),
                    'price' => $r->input('product_price'),
                ]
            );

        $specs = MobileSpec::where('product_id', '=', $id)
            ->update(
                [
                    'operating_system' => $r->input('operating_system'),
                    'processor' => $r->input('processor'),
                    'memory' => $r->input('memory'),
                    'storage' => $r->input('storage'),
                    'rear_cam_mp' => $r->input('rear_cam'),
                    'front_cam_mp' => $r->input('front_camera'),
                    'display' => $r->input('display'),
                    'battery_capacity' => $r->input('battery_capacity'),
                    'charger' => $r->input('charger'),
                    'usb_interface' => $r->input('usb_interface'),
                    'sim_slots' => $r->input('sim_slots'),
                    'external_memory' => $r->input('external_memory'),
                    'color' => $r->input('color'),
                ]
            );

            return redirect('/admin/mobile/view/' . $id)->with('success', 'Mobile product edited successfully!');
    }

    public function edit_audio_form(string $id)
    {
        $product = Product::query()
        ->select('*')
        ->join('audio_specs', 'products.product_id', '=', 'audio_specs.product_id')
        ->where('products.product_id', '=', $id)
        ->get()
        ->first();

        return view('audio_edit', compact('product'));
    }

    public function edit_audio (Request $r, string $id)
    {
        $product = Product::where('product_id', '=', $id)
            ->update(
                [
                    'name' => $r->input('product_name'),
                    'price' => $r->input('product_price'),
                ]
            );
        
        $specs = AudioSpec::where('product_id', '=', $id)
            ->update(
                [
                    'battery_life' => $r->input('battery_life'),
                    'microphone' => $r->input('microphone'),
                    'noise_cancellation' => $r->input('noise_cancellation'),
                    'add_features' => $r->input('add_features'),
                    'color' => $r->input('color'),
                ]
            );
            
            return redirect('/admin/audio/view/' . $id)->with('success', 'Audio product edited successfully!');
    }

    public function edit_laptop_form (string $id)
    {
        $product = Product::query()
        ->select('*')
        ->join('laptop_specs', 'products.product_id', '=', 'laptop_specs.product_id')
        ->where('products.product_id', '=', $id)
        ->get()
        ->first();

        return view('laptop_edit', compact('product'));
    }

    public function edit_laptop (Request $r, string $id)
    {
        $product = Product::where('product_id', '=', $id)
            ->update(
                [
                    'name' => $r->input('product_name'),
                    'price' => $r->input('product_price'),
                ]
            );

        $specs = LaptopSpec::where('product_id', '=', $id)
            ->update(
                [
                    'operating_system' => $r->input('operating_system'),
                    'processor' => $r->input('processor'),
                    'memory' => $r->input('memory'),
                    'storage' => $r->input('storage'),
                    'display' => $r->input('display'),
                    'graphics' => $r->input('graphics'),
                    'usb_ports' => $r->input('usb_ports'),
                    'hdmi' => $r->input('hdmi'),
                    'ram_slots' => $r->input('ram_slots'),
                    'color' => $r->input('color'),
                ]
            );

            return redirect('/admin/laptop/view/' . $id)->with('success', 'Laptop product edited successfully!');
    }

    public function delete_mobile (string $id)
    {
        $product = Product::where('product_id', '=', $id)
        ->delete();

        $specs = MobileSpec::where('product_id', '=', $id)
        ->delete();

        $photo = ProductPhoto::where('product_id', '=', $id)
        ->delete();

        $shop_photo = ShopPhoto::where('product_id', '=', $id)
        ->delete();

        return redirect('/admin/products')->with('success', 'Product deleted');
    }

    public function delete_audio (string $id)
    {
        $product = Product::where('product_id', '=', $id)
        ->delete();

        $specs = AudioSpec::where('product_id', '=', $id)
        ->delete();

        $photo = ProductPhoto::where('product_id', '=', $id)
        ->delete();

        $shop_photo = ShopPhoto::where('product_id', '=', $id)
        ->delete();

        return redirect('/admin/products')->with('success', 'Product deleted');
    }

    public function delete_laptop (string $id)
    {
        $product = Product::where('product_id', '=', $id)
        ->delete();

        $specs = LaptopSpec::where('product_id', '=', $id)
        ->delete();

        $photo = ProductPhoto::where('product_id', '=', $id)
        ->delete();

        $shop_photo = ShopPhoto::where('product_id', '=', $id)
        ->delete();

        return redirect('/admin/products')->with('success', 'Product deleted');
    }




}
