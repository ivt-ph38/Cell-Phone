<?php

namespace App\Http\Controllers\User;

use App\Order;
use App\Order_detail;
use App\User;
use Session;
use Illuminate\Http\Request;
use Auth;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    public function checkLogin(){
        if (Auth::check()) {
            $cart = Session::get('cart');
            $user = Auth::user();
            return view('user.checkout',compact('cart', 'user'));
        }
        else {
            $role = 'cart';
            return view('user.login',compact('role'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

       $dataOrder = [
            'user_id' => Auth::user()->id,
            'status_id' =>'1',
            'deliverer_id' => '1',
            'total_price' => Session::get('cart')->totalPrice,
            'note' =>'test1'
        ];
        $order = Order::create($dataOrder);
        $order_id = $order->id;
        foreach (Session::get('cart')->items as $key => $value) {
           $dataOrderDetail = [
            'order_id' => $order_id,
            'product_id' => $value['item']->id,
            'sale_quantity'=>$value['qty'],
            'price'=>$value['price']
        ];
         $order = Order_detail::create($dataOrderDetail);
          
        }
        session()->forget('cart');
        return redirect()->route('user.Account');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id,$status)
    {
       $order = Order::find($id);
       if ($status== 1) {
          $data=['status_id'=> 4];
       }
       elseif ($status==4){
         $data=['status_id'=> 1];
       }
       
       
       $order->update($data);

       return redirect()->route('user.Account');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
