<?php

namespace App\PaymentMethods;

class PaymentStrategyContext
{
    private PaymentMethod $strategy;

    public function __construct(string $paymentMethod)
    {
        $this->strategy = match ($paymentMethod) {
            'credit' => new CreditCardStrategy(),
            'apple' => new ApplePayStrategy(),
            'google' => new GooglePayStrategy(),
            default => throw new \InvalidArgumentException('you must pass in either credit,apple,or google as the payment method.'),
        };
    }

    public function pay(): string
    {
        return $this->strategy->pay();
    }
}
