<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Model\Category;
use App\Model\Cupon;
use App\Model\multiplePhoto;
use App\Model\Product;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){
       $categories = Category::all();
       return view('admin.dashboard.addProduct',compact('categories'));
   }

   public function addProduct(ProductRequest  $request){

       $photo = $request->file('photo');
       $photo_extension = $photo->getClientOriginalExtension();
       $photo_name = "product_image".date('y_mdhi_s').rand(1,9).".".$photo_extension;

       $product = [];
       $product['categoryId'] = $request->categoryId;
       $product['productName'] = $request->productName;
       $product['subtitle'] = $request->subtitle;
       $product['model'] = $request->model;
       $product['fuel'] = $request->fuel;
       $product['cc'] = $request->cc;
       $product['description'] = $request->description;
       $product['photo'] = $photo_name;
       $product['created_at'] = Carbon::now();

       $upload_location = base_path('public/uploads/product/'.$photo_name);
       Image::make($photo)->resize('1200','1125')->save($upload_location);
       $add_product_id = Product::insertGetId($product);

       if ($request->file('multiple_image')){
           foreach ($request->file('multiple_image') as $product_photos){
               $photo_extension = $product_photos->getClientOriginalExtension();
               $product_photo_name = "product_photo".date('y_mdhi_s').rand(1,9).".".$photo_extension;
               $upload_location = base_path('public/uploads/multipleProduct/'.$product_photo_name );
               Image::make($product_photos)->resize('1200','1125')->save($upload_location);
               $multi_photo =[];
               $multi_photo['product_id']=$add_product_id;
               $multi_photo['multiple_image']=$product_photo_name;
               multiplePhoto::insert($multi_photo);
           }
       }
       $notification = array(
           'message' => "Product Added Successfully",
           'alert-type' => 'success'
       );
       return redirect()->route('addProduct')->with($notification);
   }

   public function product(){
       $products = Product::all();
       return view('admin.dashboard.product',compact('products'));
   }

   public function cupon(){
       $cupons  = Cupon::all();
       return view('admin.dashboard.cupon',compact('cupons'));
   }

   public function addCupon(Request  $request){
       $this->validate($request,[
           'title'=>'required|unique:cupons,title',
           'discount'=>'required|max:99|min:1',
           'expaire'=>'required',
       ]);

       Cupon::insert([
           'title'=>strtoupper($request->title),
           'discount'=>$request->discount,
           'expaire'=>$request->expaire,
       ]);
       $notification = array(
           'message' => "Cupon Added Sucessfully",
           'alert-type' => 'info'
       );
       return redirect()->back()->with($notification);
   }
}
