<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PaymentApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Payment::paginate(15));
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->all();
        $item = Payment::create($data);
        return response()->json($item, 201);
    }

    public function show(Payment $payment): JsonResponse
    {
        return response()->json($payment);
    }

    public function update(Request $request, Payment $payment): JsonResponse
    {
        $payment->update($request->all());
        return response()->json($payment);
    }

    public function destroy(Payment $payment): JsonResponse
    {
        $payment->delete();
        return response()->json(null, 204);
    }
}
