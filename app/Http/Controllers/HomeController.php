<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
use App\categories;
use App\contact;
use App\notes;
use App\products;
use App\request_states;
use App\requested_books;
use App\requests;
use App\subCategory;
use App\tasks;
use App\userFav;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function index()
    {
        if (auth()->check()){
            if (Auth::user()->user_admin == 1){
                return redirect('categories-list');
            }elseif (auth()->user()->user_banned==1){
                return redirect('404');
            }else{
                $getAllCategories = categories::all();
                return view('shop/Home',['getAllCategories'=>$getAllCategories]);
            }
        }else{
            $getAllCategories = categories::all();
            return view('shop/Home',['getAllCategories'=>$getAllCategories]);
        }
    }

    public function ShowCategoriesList()
    {
        $categories = categories::all();
        return view('admin/categories-list', compact('categories'));
    }

    public function ShowAddCat()
    {
        return view('admin/add-cat');
    }

    public function ShowEeditCat()
    {
        $categories = categories::all();
        return view('admin/edit-cat', compact('categories'));
    }

    public function ShowProductsList()
    {
        $products = products::all();
        $categories = categories::all();
        return view('admin/products-list', compact('products', 'categories'));
    }

    public function ShowEeditProducts()
    {
        $products = products::all();
        return view('admin/edit-product', compact('products'));
    }

    public function ShowAddProduct()
    {
        $categories = categories::all();
        return view('admin/add-product', compact('categories'));
    }
    public function edit_product($id){
        $getProduct = products::find($id);
        $getcategories = categories::all();
        return view(app('admin_view').'.editProduct',['getProduct'=>$getProduct,'id'=>$id,'getcategories'=>$getcategories]);
    }
    public function edit_product_post(Request $r,$id){
        $editProduct = products::find($id);
        $validator = Validator::make($r->all(),[
            'product_name' =>  'required',
            'product_price' =>  'required',
            'cat_id' =>  'required',
            'product_image'=>  'image',
            'product_details'=>  'required',
            'product_count'=>  'required',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            if ($r->hasFile('product_image')){
                $imageName = time().'.'.$r->product_image->getClientOriginalExtension();
                $r->product_image->move(public_path('shop/images'), $imageName);
            }else{
                $imageName = $editProduct->product_image;
            }
            $editProduct->product_name = $r->input('product_name');
            $editProduct->product_price = $r->input('product_price');
            $editProduct->product_category = $r->input('cat_id');
            $editProduct->product_image = $imageName;
            $editProduct->product_details = $r->input('product_details');
            $editProduct->product_count = $r->input('product_count');
            $editProduct->save();
            return redirect('edit-product');
        }
    }
    public function profiles_list(){
        $getAllUsers = User::all();
        return view(app('admin_view').'.profiles',['getAllUsers'=>$getAllUsers]);
    }
    public function deleteuser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('profiles-list');
    }
    public function edituser($id){
        $getUsers = User::find($id);
        return view(app('admin_view').'.editUser',['getUsers'=>$getUsers,'id'=>$id]);
    }
    public function edituser_post(Request $r,$id){
        $editUser = User::find($id);
        $validator = Validator::make($r->all(),[
            'user_admin' =>  'required',
            'user_banned' =>  'required',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $editUser->user_admin = $r->input('user_admin');
            $editUser->user_banned = $r->input('user_banned');
            $editUser->save();
            return redirect('profiles-list');
        }
    }
}
