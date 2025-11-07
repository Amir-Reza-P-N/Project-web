<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DiscountApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Discount::paginate(15));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $item = Discount::create($data);
        return response()->json($item, 201);
    }

    public function show(Discount $discount): JsonResponse
    {
        return response()->json($discount);
    }

    public function update(Request $request, Discount $discount): JsonResponse
    {
        $discount->update($request->all());
        return response()->json($discount);
    }

    public function destroy(Discount $discount): JsonResponse
    {
        $discount->delete();
        return response()->json(null, 204);
    }
}
