<?php

namespace App\Http\Controllers\Factory;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Factory\PaymentRequest;
use App\Contracts\Contracts\Factory\PaymentFactoryInterface;

class PaymentController extends Controller
{
    public function __construct(public readonly PaymentFactoryInterface $paymentFactory)
    {

    }

    public function pay(PaymentRequest $request)
    {
        $data = $request->validated();
        $paymentClass = $this->paymentFactory->create($data['payType']);

        return response()->json([
            'payment_status' => $paymentClass->pay(new Order())->value
        ], 200);
    }
}
