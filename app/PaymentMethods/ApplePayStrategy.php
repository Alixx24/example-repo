<?php

namespace App\PaymentMethods;

class ApplePayStrategy implements PaymentMethod {

    public function pay(): string
    {
        return 'Apple Pay';
    }
}