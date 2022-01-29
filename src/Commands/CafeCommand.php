<?php

namespace Reno\Cafe\Commands;

use Illuminate\Console\Command;

class CafeCommand extends Command
{
    public $signature = 'cafe';

    public $description = 'A command for Laravel Cafe';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
