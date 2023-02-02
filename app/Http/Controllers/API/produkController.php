<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class produkController extends Controller
{
    public function index() {
        $data = Product::all(); 
        return response()->json(['data'=>$data], 200);
    }

    public function detailProduct(Request $request){
        $data = Product::with('stock', 'kategori')->find($request-> id);
        return response()->json(['data'=>$data], 200);
    }

    public function a(){
        
    }
}
