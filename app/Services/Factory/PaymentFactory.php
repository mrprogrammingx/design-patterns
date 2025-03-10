<?php

namespace App\Services\Factory;

use App\Contracts\Factory\PaymentFactoryInterface;
use App\Contracts\Factory\PaymentInterface;

class PaymentFactory implements PaymentFactoryInterface
{
    public static function create(string $paymentType): PaymentInterface
    {
        return match ($paymentType) {
            'stripe' => new StripePayment(),
            'paypal' => new PaypalPayment(),
            default => throw new \InvalidArgumentException('Invalid payment type!')
        };
    }
}
