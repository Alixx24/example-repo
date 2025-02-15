<?php

namespace App\Console\Commands;

use App\PaymentMethods\PaymentStrategyContext;
use Illuminate\Console\Command;

class PaymentStrategyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pay {paymentMethod}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display the payment method strategy that is used';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $strategyContext = new PaymentStrategyContext($this->argument('paymentMethod'));
        $this->info('this was paid with the following payment mehods: ' . $strategyContext->pay());
        return Command::SUCCESS;
    }
}
