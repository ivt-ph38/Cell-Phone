<?php

namespace App\Http\Controllers\User;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
      echo "string";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filterPrice(){
       $product =  DB::table('products')->where('category_id',$id)->whereBetween('price', array(3000000, 9000000))->get();
       dd($product);
    }

    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);   
        Session::put('cart',$cart);  
        return redirect()->route('user.cart'); //chuyen đến route cart
    }
     public function getCart() {
        if (!Session::has('cart')) {
            return redirect()->route('user.home');
        }
        $cart = Session::get('cart');

        // dd($cart);
        return view('user.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
        //chuyen đến trang thanh toán
    }
    public function deleteProduct($id) {
         
        $storedCart = Session::get('cart');
        $cart = new Cart($storedCart);
        $cart->delete($id);
        Session::put('cart',$cart);
        return redirect()->route('user.cart');

    }
public function updateCart($id, $action){
    
        $storedCart = Session::get('cart');
        $cart = new Cart($storedCart);
        $cart->update($id,$action);
        Session::put('cart',$cart);
        return redirect()->route('user.cart');
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itemProduct = Product::find($id)->toArray();
        return view('user.product',compact('itemProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
