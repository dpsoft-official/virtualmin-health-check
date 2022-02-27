<?php

namespace Dpsoft\VirtualminHealthCheck\Commands;

use Illuminate\Console\Command;

class VirtualminHealthCheckCommand extends Command
{
    public $signature = 'virtualmin-health-check';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
