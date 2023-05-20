<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    //
    public function index()
    {

       $data = Products::all();
            return view('admin.products.index',[
                'data'=>$data
            ]);
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.products.create',[
            'category'=>$category
        ]);
    }

    public function store(Request $request)
    {
        //
        $data=new Products();
        $data->Category_Name = $request->Category_Name;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->detail = $request->detail;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->status = $request->status;
        $data->save();
        return redirect('admin/products');

    }
    public function show(Request $request){

        $product  = Products::find(1);
        $category = Category::all();
        return view ('admin.create', compact ('product', 'category'));
    }

}
