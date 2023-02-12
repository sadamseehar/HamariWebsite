<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\category;
use App\Models\sub_category;

class adminController extends Controller
{
    function dashboard(){
        return view("admin.layout");
    }

    function login(){
        return view("admin.login");
    }

    function login_post(Request $request)
    {
        $user_name = $request->user_name;
        $password = $request->password;

        $login = DB::table("admin_models")->select("user_name")->where(['user_name'=>$user_name , 'password'=>$password])->first();

        if($login){
            session(["user_name"=>$login->user_name]);
            return view("admin.layout");
        }
        else{
            return redirect()->back()->with("message","Invalid credentials");
        }

    }

    function logout(){
        session()->forget("user_name");
        return view("admin.login");
    }


    function category()
    {
        $category = category::all();
        return view("admin.category",compact('category'));
    }

    function addCategory()
    {
        return view("admin.addCategory");
    }


    function addCategoryPost(Request $request)
    {
        $category = new category();
        $category->category_name = $request->category_name;
        $category->save();
        return redirect('category')->with("message","category added successfully");
    }


    function deleteCategory($id)
    {
        $category =category::find($id);
        $category->delete();
        return redirect()->back()->with("message","vategory deleted succesfully");

    }

    function subCategory()
    {
        $sub_cat = sub_category::all();

        return view("admin.subCategory",compact('sub_cat'));
    }
    function addSubCategory()
    {
        $category = category::all();
        return view("admin.addSubCategory",compact('category'));
    }

    function addSubCategoryPost(Request $request){
        $sub_cat = new sub_category();
        $sub_cat->sub_category_name = $request->sub_category_name;
        $sub_cat->categoryID = $request->category;
        $sub_cat->save();
        return redirect("subCategory")->with("message","sub category added");
    }
}
