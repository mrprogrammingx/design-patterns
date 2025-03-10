<?php

namespace App\Contracts\Factory;

use App\Enums\PaymentStatus;
use App\Models\Order;

interface PaymentInterface
{
    public function pay(Order $order): PaymentStatus;

    public function checkPayment(Order $order): PaymentStatus;
}
