<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function postProduct()
    {
        products::create(request()->all());
        request()->file('product_image')->store('public/productImages');
        return redirect('add-product');
    }

    public function deleteProduct($id)
    {
        $product = products::find($id);
        $product->delete();
        return redirect('products-list');
    }

    public function editProduct()
    {
        $id = request()->product_id;
        $product = products::find($id);
        $product->product_name = request()->product_name;
        $product->product_price = request()->product_price;
        $product->product_category = request()->product_category;
        $product->product_image = request()->product_image;
        $product->product_count = request()->product_count;
        $product->product_details = request()->product_details;
        $product->save();
        return redirect('edit-product');
    }
}
