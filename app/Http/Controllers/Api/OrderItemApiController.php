<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class OrderItemApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(OrderItem::paginate(15));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $item = OrderItem::create($data);
        return response()->json($item, 201);
    }

    public function show(OrderItem $orderitem): JsonResponse
    {
        return response()->json($orderitem);
    }

    public function update(Request $request, OrderItem $orderitem): JsonResponse
    {
        $orderitem->update($request->all());
        return response()->json($orderitem);
    }

    public function destroy(OrderItem $orderitem): JsonResponse
    {
        $orderitem->delete();
        return response()->json(null, 204);
    }
}
