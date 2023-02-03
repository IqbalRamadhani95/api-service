<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class orderItemController extends Controller
{
    public function index(){
        $data = OrderItem::all();

        return response()->json(['data'=>$data], 200);
    }

    public function store(Request $request){
        $orderItem = OrderItem::create([
            'product_id' => $request->product_id,
            'order_id' => $request->order_id,
            'qty' => $request->qty,
            'total_harga' => $request->total_harga
        ]);

        return response()->json(['data'=>$orderItem],200);
    }

}
