<?php

namespace App\Console\Commands;

use App\Services\MarketMetricsService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class WarmCache extends Command
{
    protected $signature = 'scheduled:cache:warm';

    protected $description = 'Warm the OnChain data cache';

    public function handle(MarketMetricsService $service)
    {

    }
}
