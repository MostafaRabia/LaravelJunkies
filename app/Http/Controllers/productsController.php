<?php

namespace App\Http\Controllers;

use App\products;

class productsController extends Controller
{
    public function postProduct()
    {
<<<<<<< HEAD
        products::create(request()->all());
        request()->file('product_image')->store('public/shop/images');
        return redirect('add-product');
=======
        $product = products::where('product_name', '=', request()->product_name);

        if ($product->count() > 0) {
            $product = new products();
            $product->product_count = 10;
            $product->save();
        } else {
            products::create(request()->all());
            request()->file('product_image')->store('public/productImages');
            return redirect('add-product');
        }
>>>>>>> eb5788a62296d63c73c251b9dd5fde9882d99dd0
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
