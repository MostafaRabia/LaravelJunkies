<?php

namespace App\Http\Controllers;

use App\books;
use App\categories;
use App\category;
use App\contact;
use App\notes;
use App\products;
use App\request_states;
use App\requested_books;
use App\requests;
use App\subCategory;
use App\tasks;
use App\userFav;
use App\users;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->user_admin == 1)
            return redirect('categories-list');
        else
            return view('shop/Home');
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
        $categories = categories::all();
        return view('admin/edit-product', compact('products', 'categories'));
    }

    public function ShowAddProduct()
    {
        $categories = categories::all();
        return view('admin/add-product', compact('categories'));
    }

}
