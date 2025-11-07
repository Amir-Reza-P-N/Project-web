<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AddressApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Address::paginate(15));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $item = Address::create($data);
        return response()->json($item, 201);
    }

    public function show(Address $address): JsonResponse
    {
        return response()->json($address);
    }

    public function update(Request $request, Address $address): JsonResponse
    {
        $address->update($request->all());
        return response()->json($address);
    }

    public function destroy(Address $address): JsonResponse
    {
        $address->delete();
        return response()->json(null, 204);
    }
}
