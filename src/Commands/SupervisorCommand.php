<?php

namespace Kiukishenkaec\Supervisor\Commands;

use Illuminate\Console\Command;

class SupervisorCommand extends Command
{
    public $signature = 'supervisor';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
