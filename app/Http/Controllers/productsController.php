<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use Validator;

class productsController extends Controller
{
    public function postProduct(Request $r)
    {
        $validator = Validator::make($r->all(),[
            'product_name' =>  'required|unique:products',
            'product_price' =>  'required',
            'product_category' =>  'required',
            'product_image'=>  'image',
            'product_details'=>  'required',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            if ($r->hasFile('product_image')){
                $imageName = time().'.'.$r->product_image->getClientOriginalExtension();
                $r->product_image->move(public_path('shop/images'), $imageName);
            }
            $add = new products;
            $add->product_name = $r->input('product_name');
            $add->product_price = $r->input('product_price');
            $add->product_category = $r->input('product_category');
            $add->product_image = $imageName;
            $add->product_details = $r->input('product_details');
            $add->product_count = 1;
            $add->save();
            return redirect('edit-product');
        }
    }

    public function deleteProduct($id)
    {
        $product = products::find($id);
        $product->delete();
        return redirect('edit-product');
    }
}
