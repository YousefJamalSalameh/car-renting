<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

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
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        //
        $data=new Products();
        $data->CategoryId = $request->CategoryId;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->detail = $request->detail;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->status = $request->status;
        $data->save();
        return redirect('admin/products');

    }

}
