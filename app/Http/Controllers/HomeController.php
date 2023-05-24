<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{



    public function index(){
         $data=Product::limit(3)->get();

        return view('home.index',[

            'data'=>$data
        ]);
    }

    public function about(){
        return view('home.about');
    }
    public function products(){
        $data=Product::all();
        return view('home.products',
            [
                'data'=>$data

            ]);
    }

    public function detail($pid){
          $data=Product::find($pid);
          $images=DB::table('images')->where('productId',$pid)->get();
        return view('home.detail',[

            'data'=>$data,
            'images'=>$images
        ]);
    }

}


