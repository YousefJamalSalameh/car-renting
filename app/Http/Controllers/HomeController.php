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



    public function searched(Request $request)
    {
        if ($request->search) {
            $searchQuery = $request->input('search');
            $searchedP = Product::where('keywords', 'LIKE', '%' . $request->search . '%')
                ->orWhere('title', 'LIKE', '%' . $request->search . '%')
                ->orWhere('description', 'LIKE', '%' . $request->search . '%')
                ->orWhere('detail', 'LIKE', '%' . $request->search . '%')
                ->get();
            return view('home.searched', [
                'searchedP' => $searchedP,
                'searchQuery' => $searchQuery
            ]);
        }
        else{
            return redirect()->back();
        }
    }

}


