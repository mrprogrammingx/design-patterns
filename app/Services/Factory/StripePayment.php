<?php

namespace App\Services\Factory;

use App\Contracts\Factory\PaymentInterface;
use App\Models\Order;
use App\Enums\PaymentStatus;
use Illuminate\Support\Facades\Log;

class StripePayment implements PaymentInterface
{
    public function pay(Order $order): PaymentStatus
    {
        Log::info('Stripe pay is Processing');

        return $order->id ? PaymentStatus::PROCESSING : PaymentStatus::FAILURE;
    }

    public function checkPayment(Order $order): PaymentStatus
    {
        Log::info('Stripe is checking');

        return $order->id ? PaymentStatus::SUCCESS : PaymentStatus::FAILURE;
    }
}
