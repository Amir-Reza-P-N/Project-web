<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CartItemApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(CartItem::paginate(15));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $item = CartItem::create($data);
        return response()->json($item, 201);
    }

    public function show(CartItem $cartitem): JsonResponse
    {
        return response()->json($cartitem);
    }

    public function update(Request $request, CartItem $cartitem): JsonResponse
    {
        $cartitem->update($request->all());
        return response()->json($cartitem);
    }

    public function destroy(CartItem $cartitem): JsonResponse
    {
        $cartitem->delete();
        return response()->json(null, 204);
    }
}
