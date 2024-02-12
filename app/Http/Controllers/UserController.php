<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DB;

class UserController extends Controller
{
    public function edit(Request $r)
    {
        $customer = User::where('user_id', '=', Session::get('user_id'))
            ->update(
                [
                    'first_name' => $r->input('first_name'),
                    'last_name' => $r->input('last_name'),
                    'email' => $r->input('email'),
                    'shipping_address' => $r->input('shipping_address'),
                ]
            );

            return redirect('/profile')->with('success', 'Profile edited successfully!');
    }

    public function show_edit()
    {
        $customer = User::query()
        ->select('*')
        ->where('user_id', '=', Session::get('user_id'))
        ->get()
        ->first();

        return view('edit_profile', compact('customer'));
    }

    public function show_profile()
    {
        $customer = User::query()
        ->select('*')
        ->where('user_id', '=', Session::get('user_id'))
        ->get()
        ->first();

        return view('profile', compact('customer'));
    }

    public function register(Request $r)
    {
        $user = new User;
        $user->first_name = $r->input('first_name');
        $user->last_name = $r->input('last_name');
        $user->email = $r->input('email');
        $user->password = Hash::make($r->input('pw'));
        $user->role = 'customer';
        $user->shipping_address = $r->input('shipping_address');
        $user->save();

        return redirect('/login')->with('success', 'Account created successfully. You can now log in!');
    }

    public function show_register()
    {
        return view('register');
    }

    public function logout()
    {
        if (Session::has('user_id')){
            Session::flush();
        }

        return redirect('/login');
    }

    public function login(Request $r)
    {
        $user = User::where("email", "=", $r -> email)
                    ->first();
        
        if ($user) {
            if (Hash::check($r -> pw, $user -> password)) {
                if ($user -> role == 'customer') {
                    Session::put('user_id', $user -> user_id);
                    Session::put('first_name', $user -> first_name);
                    Session::put('last_name', $user -> last_name);
                    Session::put('email', $user -> email);
                    Session::put('role', $user -> role);
                    Session::put('shipping_address', $user -> shipping_address);

                    return redirect ('/')->with('success','Successfully logged in.');

                } else {
                    return redirect ('/login')->with('fail', 'Account is not a customer account');
                }

            } else {
                return redirect('/login')->with('fail', 'Incorrect password');
            }
        } else {
            return redirect('/login')->with('fail', 'Account with that email does not exist.');
        }
    }

    public function show_login()
    {

        return view('sign_in');
    }

    public function show_admin_login()
    {

        return view('admin_sign_in');
    }

    public function admin_login(Request $r)
    {
        $user = User::where("email", "=", $r -> email)
                    ->first();
        
        if ($user) {
            if (Hash::check($r -> pw, $user -> password)) {
                if ($user -> role == 'admin') {
                    Session::put('user_id', $user -> user_id);
                    Session::put('first_name', $user -> first_name);
                    Session::put('last_name', $user -> last_name);
                    Session::put('email', $user -> email);
                    Session::put('role', $user -> role);

                    return redirect ('/admin/dashboard')->with('success','Admin successfully logged in!');

                } else {
                    return redirect ('/admin')->with('fail', 'Account is not an admin account!');
                }

            } else {
                return redirect('/admin')->with('fail', 'Incorrect password');
            }
        } else {
            return redirect('/admin')->with('fail', 'Account with that email does not exist.');
        }
    }

    public function admin_logout()
    {
        if (Session::has('user_id')){
            Session::flush();
        }

        return redirect('/admin');
    }
}
