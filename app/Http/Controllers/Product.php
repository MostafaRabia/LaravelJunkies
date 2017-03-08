<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;

class Product extends Controller
{
    public function showProduct($id){
        $getAllAboutProduct = products::where('id',$id)->first();
        return view(app('shop_view').'.Single',['getAllAboutProduct'=>$getAllAboutProduct]);
    }
}
