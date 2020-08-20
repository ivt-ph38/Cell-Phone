<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\User\Controller;
use Auth;
use App\Order;
use App\Order_detail;
use App\User;
use App\Product;
use App\Status;
use App\Http\Requests\RegisterRequest;
class UserController extends Controller
{
	
	public function show(){
		if (Auth::check()) {       	
			$user=Auth::user()->toArray();
			$account=User::find(Auth::user()->id)->orders->toArray();
			foreach ($account as $key => $value) {
				$account[$key]['status_name'] = Status::find($value['status_id'])->toArray()['status'];
				$account[$key]['details'] = Order::find($value['id'])->order_details->toArray();
				foreach ($account[$key]['details'] as $key1 => $order_detail) {
					$account[$key]['details'][$key1]['product_name'] = Product::find($account[$key]['details'][$key1]['product_id'])->toArray()['name'];
				}
			}
			krsort($account);
			return view('user.User',compact('account','user'));
		}
		else {
			$role = 'home';
			return view('user.login',compact('role'));
		}
	}

	public function register(RegisterRequest $request, $role)
	{

		$data = $request->except('_token','_method');
		$data['password'] = bcrypt( $data['password']);     
		$user = User::create($data);
        $dataLogin=$request->only('email', 'password');
		\Auth::attempt($dataLogin);
        $request->session()->regenerate();
        if ($role == 'home') {
            return redirect()->route('user.Account');
        }
        elseif ($role== 'cart') {
            return redirect()->route('user.Checkout');
        }
        
		

	}
}
