<?php

namespace App\PaymentMethods;

class CreditCardStrategy implements PaymentMethod {

    public function pay(): string
    {
        return 'credit card';
    }
}