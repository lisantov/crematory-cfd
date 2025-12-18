<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth()->id())->get();

        return response()->json([
            'orders' => $orders
    ]);
    }

    public function store(StoreOrderRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth()->id();
        $order = Order::create($data);

        return response()->json([
            "message"=> "Order created",
            "order"=>$order,
        ],200);
    }

    public function statusOrder(Order $order)
    {
        return response()->json([
            "status"=> $order->status,
        ]);
    }

    public function cancelOrder(Request $request, Order $order)
    {
        $cancelStatuses = ['completed', 'in_progress','cancelled'];
        if (in_array($order->status, $cancelStatuses)) {
            return response()->json([
                'message' => 'Order cannot be cancelled'
            ], 400);
        }

        $order->update([
            'status' => 'cancelled',
            'cancellation_reason' => $request->cancellation_reason,
            'updated_at' => now(),
        ]);
        return response()->json([
            'message'=> 'Order cancelled'
        ]);
    }

    public function historyOrders()
    {
        $orders = Order::where('user_id', Auth()->id())
        ->where('status', 'completed')
        ->get();
        return response()->json([
            'orders'=> $orders
        ]);
    }

    public function showDocuments(Order $order)
    {
        if ($order->user_id !== Auth()->id()) {
            return response()->json([
                'message' => 'Forbbiden'
            ], 403);
        }

        $documents = $order->documents()->get();

        return response()->json([
            'order_id' => $order->id,
            'documents' => $documents
        ]);
    }


}
