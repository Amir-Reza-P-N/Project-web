<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ShipmentApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Shipment::paginate(15));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $item = Shipment::create($data);
        return response()->json($item, 201);
    }

    public function show(Shipment $shipment): JsonResponse
    {
        return response()->json($shipment);
    }

    public function update(Request $request, Shipment $shipment): JsonResponse
    {
        $shipment->update($request->all());
        return response()->json($shipment);
    }

    public function destroy(Shipment $shipment): JsonResponse
    {
        $shipment->delete();
        return response()->json(null, 204);
    }
}
