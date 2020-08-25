<?php

namespace App\Http\Controllers\Admin;
use App\Category;
use App\Product;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->orderBy('id','ASC')->paginate(10);;
        $categoryID = Category::all();
        return view('admin.product.list', compact('products','categoryID'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryID = Category::all();
        return view('admin.product.create',compact('categoryID'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        if($request->hasFile('image')){
            //code upload file
            $newName = md5(microtime(true)).$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('admin/images/products/'),$newName);
            
        }
        $data['image'] = '/admin/images/products/'.$newName;
        Product::create($data);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('category')->find($id);
        //dd($sp->category->name);
        return view('admin.product.list-id', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categoryID = Category::all();
        return view('admin.product.edit', compact('product', 'categoryID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $data = $request->except('_token', '_method');
        if($request->hasFile('image')){
            //code upload file
            $newName =md5(microtime(true)).$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('admin/images/products/'),$newName);
            
        }
        $data['image'] = '/admin/images/products/'.$newName;
        $product->update($data);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $productID = Product::with('order_details')->find($id);

        $order_detail =$productID->order_details;

        foreach ($order_detail as $value) {
            // lấy giá trị order_id//
            $order_id = $value->order_id;
            $order = Order::find($order_id)->toArray();
            //lấy status_id//
            $status_id = $order['status_id'];
            dd($status_id);
            if($status_id == 4){
                $productID->delete();
                return redirect()->route('product.index')->with(['message'=>'Đã xóa sản phẩm thành công. !!']);
            }
            else{
                return redirect()->route('product.index')->with(['error'=>'Không thể xóa vì đơn hàng của sản phẩm này chưa thanh toán.!!']);
            }    
        }
        
    }
    public function search(Request $request){
        $categoryID = Category::all();
        if($request->name){
            $products = Product::where('name','like','%'.$request->name.'%')
                        ->orWhere('price',$request->name)
                        ->get();
        return view('admin.product.search', compact('products','categoryID'));
        }
        if($request->brand){
            //dd($request->brand);
            $products = Product::where('category_id',$request->brand)->get();
                        
        return view('admin.product.search', compact('products','categoryID'));
        }
    }
    
}
