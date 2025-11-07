<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CartApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Cart::paginate(15));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $item = Cart::create($data);
        return response()->json($item, 201);
    }

    public function show(Cart $cart): JsonResponse
    {
        return response()->json($cart);
    }

    public function update(Request $request, Cart $cart): JsonResponse
    {
        $cart->update($request->all());
        return response()->json($cart);
    }

    public function destroy(Cart $cart): JsonResponse
    {
        $cart->delete();
        return response()->json(null, 204);
    }
}
