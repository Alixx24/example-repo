<?php

namespace App\Repositories;

use App\Models\Quote;

class QuoteRepo implements IQuoteRepo {
    function all(): array {
        $quotes = [
            new Quote([
                'quote' => 'if it were easy, everyone would do it',
            ]),
        ];
        return $quotes;
    }
}