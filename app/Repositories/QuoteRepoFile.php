<?php

namespace App\Repositories;

use App\Models\Quote;

class QuoteRepoFile implements IQuoteRepo {
    function all(): array {
        $quotes = [
            [
                'quote' => 'if it were easy, everyone would do it',
            ],
            [
                'i decided to remain a fool when i discovered the wisdom of me',
            ]
        ];
        return $quotes;
    }
}