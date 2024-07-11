<?php

namespace App\Providers;

use App\Repositories\IQuoteRepo;
use App\Repositories\QuoteRepo;
use App\Repositories\QuoteRepoFile;
use Illuminate\Support\ServiceProvider;

class MyRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(IQuoteRepo::class, QuoteRepoFile::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
