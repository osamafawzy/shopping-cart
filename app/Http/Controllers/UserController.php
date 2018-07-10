<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function getSignup()
    {
      return view('user.signup');
    }

    public function postSignup(Request $request)
    {
      $this->validate($request, [
        'email' =>'email|required|unique:users',
        'password' => 'required|min:4'
      ]);

      $user = new User([
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password'))
      ]);
      $user->save();
      Auth::login($user);

        if (Session::has('oldurl')){
            $oldurl = Session::get('oldurl');
            Session::forget('oldurl');
            return redirect()->to($oldurl);
        }

      return redirect()->route('user.profile');
    }

    public function getSignin()
    {
      return view('user.signin');
    }

    public function postSignin(Request $request)
    {
      $this->validate($request, [
        'email' =>'email|required',
        'password' => 'required|min:4'
      ]);
    if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
        if (Session::has('oldurl')){
            $oldurl = Session::get('oldurl');
            Session::forget('oldurl');
            return redirect()->to($oldurl);
        }
      return redirect()->route('user.profile');
    }
    return redirect()->back();

    }

    public function getProfile()
    {
        $orders = Auth::user()->orders;
        $orders->transform(function ($order, $key) {
           $order->cart = unserialize($order->cart);
           return $order;
        });
      return view('user.profile', compact('order'));
    }

    public function getLogout()
    {
      Auth::logout();
      return redirect()->route('user.signin');
    }

}
