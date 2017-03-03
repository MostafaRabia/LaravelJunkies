<?php

namespace App\Http\Controllers;

use App\categories;

class categoriesController extends Controller
{
    public function postCat()
    {
        categories::create(request()->all());
        return redirect('add-cat');
    }

    public function deleteCat($id)
    {
        $cat = categories::find($id);
        $cat->delete();
        return redirect('categories-list');
    }

    public function editCat()
    {
        $id = request()->cat_id;
        $categories_name = request()->categories_name;
        $cat = categories::find($id);
        $cat->categories_name = $categories_name;
        $cat->save();
        return redirect('edit-cat');
    }
}
