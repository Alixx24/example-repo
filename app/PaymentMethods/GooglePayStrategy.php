<?php

namespace App\PaymentMethods;

class GooglePayStrategy implements PaymentMethod {

    public function pay(): string
    {
        return 'Google Pay';
    }
}