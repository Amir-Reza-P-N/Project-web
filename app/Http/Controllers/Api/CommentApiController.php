<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CommentApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Comment::paginate(15));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $item = Comment::create($data);
        return response()->json($item, 201);
    }

    public function show(Comment $comment): JsonResponse
    {
        return response()->json($comment);
    }

    public function update(Request $request, Comment $comment): JsonResponse
    {
        $comment->update($request->all());
        return response()->json($comment);
    }

    public function destroy(Comment $comment): JsonResponse
    {
        $comment->delete();
        return response()->json(null, 204);
    }
}
