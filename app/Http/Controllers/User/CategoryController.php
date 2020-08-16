<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Product;
use App\Order_detail;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lay bien category tu boot
        //lay sanpham bán chạy tu boot
        //lay list san pham mới nhất
        $productNew = Product::orderBy('created_at', 'desc')->take(5)->get()->toArray();
        //Tạo mảng gồm tên category tên product, image và giá của list sản phẩm mới nhất
        foreach ($productNew as $key => $value) {
         $listProductNew[]=[
            'id' => $value['id'],
            'category_name'=>Category::find($value['category_id'])->toArray()['name'],
            'product_name'=>$value['name'],
            'price'=>$value['price'],
            'image'=>$value['image']
        ];
    }
    return view('user.index',compact(['listProductNew']));
        //Tra ve view trang chủ với biến categoryAndProduct
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id,$arrange)
   
    { 
         
        $listProduct = Category::find($id)->products()->orderBy('price',$arrange)->paginate(2);
       
        $categoryName = Category::find($id)->toArray();

        return view('user.store',compact(['categoryName','listProduct','arrange']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
