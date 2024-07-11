<?php

namespace App\Http\Controllers;

use App\Repositories\IQuoteRepo;
use Illuminate\Http\Request;

class QuoteControlle extends Controller
{
    private IQuoteRepo $quoteRepo;

    public function __construct(IQuoteRepo $quoteRepo)
    {
        $this->quoteRepo = $quoteRepo;
    }

    public function index()
    {
        $quotes = $this->quoteRepo->all();

        return response()->json([
            'status' => true,
            'data' => $quotes,
            'message' => 'Query OK',
        ]);
    }
}
