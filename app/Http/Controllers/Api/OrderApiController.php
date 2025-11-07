<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class OrderApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Order::paginate(15));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $item = Order::create($data);
        return response()->json($item, 201);
    }

    public function show(Order $order): JsonResponse
    {
        return response()->json($order);
    }

    public function update(Request $request, Order $order): JsonResponse
    {
        $order->update($request->all());
        return response()->json($order);
    }

    public function destroy(Order $order): JsonResponse
    {
        $order->delete();
        return response()->json(null, 204);
    }
}
