<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;
use App\Model\Admin\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $category = DB::table('categories')->get();
        $product = DB::table('products')
        ->join('categories','products.category_id','categories.id')
        ->select('products.*','categories.category_name')
        ->get();
        return view('admin.product.product',compact('category','product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->product_quantity = $request->product_quantity;
        $product->product_price = $request->product_price;
        $product->category_id = $request->category_id;
        $product->product_details = $request->product_details;
        $product->top_slider = $request->top_slider;
        $product->best_seller = $request->best_seller;
        $product->daily_essentials = $request->daily_essentials;
        $product->diaries = $request->diaries;

        $product_image = $request->file('product_image');
        // return response()->json($data);  

        if ($product_image) {
            //set the product_image URL :
            $product_image_name = date('dmy_H_s_i');
            $ext = strtolower($product_image->getClientOriginalExtension());
            $product_image_full_name = $product_image_name.'.'.$ext;
            $upload_path = 'public/media/product/';
            $product_image_url = $upload_path.$product_image_full_name;
            $success = $product_image->move($upload_path,$product_image_full_name);

            $product->product_image = $product_image_url;
            $product->save();
            
            //show success message
            $notification=array(
                'messege'=>'Product Added Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('products')->with($notification);
        }
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        $category = Category::all();
        return view('admin.product.edit', compact('product', 'category'));
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
        //retrieve the old logo
        $old_image = $request->old_image;

        //update the data into database
        $product = Product::where('id', $id)->first();
        $product->product_name = $request->product_name;
        $product->product_quantity = $request->product_quantity;
        $product->product_price = $request->product_price;
        $product->category_id = $request->category_id;
        $product->product_details = $request->product_details;
        $product->top_slider = $request->top_slider;
        $product->best_seller = $request->best_seller;
        $product->daily_essentials = $request->daily_essentials;
        $product->diaries = $request->diaries;
        $product_image = $request->file('product_image'); 

        if ($product_image) {

            //delete the old image:
            unlink($old_image);
            //set the product_image URL :
            $product_image_name = date('dmy_H_s_i');
            $ext = strtolower($product_image->getClientOriginalExtension());
            $product_image_full_name = $product_image_name.'.'.$ext;
            $upload_path = 'public/media/product/';
            $product_image_url = $upload_path.$product_image_full_name;
            $success = $product_image->move($upload_path,$product_image_full_name);

            $product->product_image = $product_image_url;
            $product->save();
            
            //show success message
            $notification=array(
                'messege'=>'Product updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('products')->with($notification);
        }
        else{
            $product->save();
            
            //show success message
            $notification=array(
                'messege'=>'Product updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('products');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete query
        Product::where('id', $id)->delete();

        //show success message
        $notification=array(
            'messege'=>'Product Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
