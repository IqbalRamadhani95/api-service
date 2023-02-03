<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class orderController extends Controller
{
    public function index(){
        $data = Order::all();

        return response()->json(['data'=>$data], 200);
    }

    public function store(Request $request){
        $order = Order::create([
            'qty' => $request->qty,
            'total_harga' => $request->total_harga
        ]);

        return response()->json(['data'=>$order], 200);
    }

    public function filterMonth(Request $request){
            
        $order = Order::whereMonth('created_at', $request->bulan)->get();
    
        return response()->json(['data'=>$order]);
    }
}
