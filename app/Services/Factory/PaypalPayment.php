<?php

namespace App\Services\Factory;

use App\Models\Order;
use App\Enums\PaymentStatus;
use Illuminate\Support\Facades\Log;
use App\Contracts\Factory\PaymentInterface;

class PaypalPayment implements PaymentInterface
{
    public function pay(Order $order): PaymentStatus
    {
        Log::info('Paypal pay is Processing');

        return $order->id ? PaymentStatus::PROCESSING : PaymentStatus::FAILURE;
    }

    public function checkPayment(Order $order): PaymentStatus
    {
        Log::info('Paypal is checking');

        return $order->id ? PaymentStatus::SUCCESS : PaymentStatus::FAILURE;
    }
}
