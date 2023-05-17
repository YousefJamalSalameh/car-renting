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
        //
        return view('admin.products.create');
    }

}
