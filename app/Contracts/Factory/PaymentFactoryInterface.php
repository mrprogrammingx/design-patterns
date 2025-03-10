<?php

namespace App\Contracts\Factory;

use App\Contracts\Factory\PaymentInterface;

interface PaymentFactoryInterface
{
    public static function create(string $paymentType): PaymentInterface;
}
