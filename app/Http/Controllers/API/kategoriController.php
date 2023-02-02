<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class kategoriController extends Controller
{
    public function kategoriProduct(Request $request){
        $data = Kategori::with('product')->find($request->id);
        return response()->json(['data'=>$data], 200);
    }
}
