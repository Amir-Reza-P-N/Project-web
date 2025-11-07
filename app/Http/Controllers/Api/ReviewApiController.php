<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ReviewApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Review::paginate(15));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $item = Review::create($data);
        return response()->json($item, 201);
    }

    public function show(Review $review): JsonResponse
    {
        return response()->json($review);
    }

    public function update(Request $request, Review $review): JsonResponse
    {
        $review->update($request->all());
        return response()->json($review);
    }

    public function destroy(Review $review): JsonResponse
    {
        $review->delete();
        return response()->json(null, 204);
    }
}
