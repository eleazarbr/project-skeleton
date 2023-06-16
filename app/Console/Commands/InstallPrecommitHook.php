<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class InstallPrecommitHook extends Command
{
    protected $signature = 'install:precommit';

    protected $description = 'Install the pre-commit hook';

    public function handle()
    {
        chmod('.github/hooks/pre-commit', 0755);
        $process = new Process(['git', 'config', 'core.hooksPath', '.github/hooks']);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new \RuntimeException($process->getErrorOutput());
        }

        $this->info('pre-commit hook installed successfully.');
    }
}
