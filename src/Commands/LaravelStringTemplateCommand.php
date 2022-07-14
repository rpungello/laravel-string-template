<?php

namespace Rpungello\LaravelStringTemplate\Commands;

use Illuminate\Console\Command;

class LaravelStringTemplateCommand extends Command
{
    public $signature = 'laravel-string-template';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
