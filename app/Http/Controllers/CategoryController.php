<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use function GuzzleHttp\Psr7\_parse_request_uri;
use function Psy\bin;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('admin.dashboard.category',compact('categories'));
    }
    public function addCategory(Request $request){
        $this->validate($request,[
            'categoryName'=>'required',
            'slug'=>'required',
            'categoryPhoto'=>'required',
        ]);
         $photo =$request->file('categoryPhoto');
         $photoExtension = $photo->getClientOriginalExtension();
         $photoName = "category_".date('Ymd_his').rand(1,100).".".$photoExtension;
         $uploadLocation = base_path('public/uploads/category/'.$photoName);
         Image::make($photo)->resize(370,295)->save($uploadLocation);

        $category =[];
        $category['categoryName']=$request->categoryName;
        $category['slug']=$request->categoryName;
        $category['categoryPhoto']=$photoName;
        $category['created_at'] = Carbon::now();
        Category::insert($category);
        $notification = array(
            'message' => "Category Added !",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.dashboard.editCategory',compact('category'));
    }
    public function updateCategory(Request $request,$id){
        $this->validate($request,[
            'categoryName'=>'required',
            'slug'=>'required',
        ]);

        $category = Category::find($id);

        if($request->file('categoryPhoto')){
            $category = Category::find($id);
            $categoryPhoto = $category->categoryPhoto;
            unlink('uploads/category/'.$categoryPhoto);

            $photo =$request->file('categoryPhoto');
            $photoExtension = $photo->getClientOriginalExtension();
            $photoName = "category_".date('Ymd_his').rand(1,100).".".$photoExtension;
            $uploadLocation = base_path('public/uploads/category/'.$photoName);
            Image::make($photo)->resize(370,295)->save($uploadLocation);

            $category->categoryName = $request->categoryName;
            $category->categoryName = $request->slug;
            $category->categoryPhoto = $photoName;
            $category->save();

            $notification = array(
                'message' => "Category Updated !",
                'alert-type' => 'info'
            );
            return redirect()->route('category')->with($notification);

        }else{

            $category = Category::find($id);
            $category->categoryName = $request->categoryName;
            $category->slug = $request->slug;
            $category->save();
            $notification = array(
                'message' => "Category Updated !",
                'alert-type' => 'info'
            );
            return redirect()->route('category')->with($notification);
        }

    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $categoryPhoto = $category->categoryPhoto;
        unlink('uploads/category/'.$categoryPhoto);
        $category->delete();

        $notification = array(
            'message' => "Category Deleted !",
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
