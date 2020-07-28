<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\News;

class NewsController extends Controller
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
        $news = News::orderBy('id')->get();
        return view('admin.news.news', compact('news'));
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
        //validate input data
        $validatedData = $request->validate([
        'news_title' => 'required',
        'news_details' => 'required'
    ]);
        //insert the data into database
        $news = new News();
        $news->news_title = $request->news_title;
        $news->news_details = $request->news_details;
        $image = $request->file('news_image');

        //if there is image
        if ($image) {
            //set the image URL :
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/news/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);

            $news->news_image = $image_url;
            $news->save();
            
            //show success message
            $notification=array(
                'messege'=>'News/Event Added Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        //if there is no image
        else{
            $news->save();
            
            //show success message
            $notification=array(
                'messege'=>'News/Event Added Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
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
        //$brand = Brand::where('id', $id)->first();
        //return view('admin.category.edit_brand', compact('brand'));
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
        /*retrieve the old logo
        $old_logo = $request->old_logo;

        //update the data into database
        $brand = Brand::where('id', $id)->first();
        $brand->brand_name = $request->brand_name;
        $image = $request->file('brand_logo');

        //if there is new image
        if ($image) {
            //delete the old logo:
            unlink($old_logo);

            //set the new image URL :
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/brand/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);

            $brand->brand_logo = $image_url;
            $brand->save();
            
            //show success message
            $notification=array(
                'messege'=>'Brand updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('brands')->with($notification);
        }
        //if there is no image
        else{
            $brand->save();
            
            //show success message
            $notification=array(
                'messege'=>'Brand name updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('brands')->with($notification);
        }
        */
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
        $news = News::where('id', $id)->first();
        $image = $news->news_image;
        unlink($image);
        $news->delete();

        //show success message
        $notification=array(
            'messege'=>'News/Event Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
