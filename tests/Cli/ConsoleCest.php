<?php

declare(strict_types=1);

namespace App\Console\Tests\Cli;

use App\Console\Tests\Support\CliTester;

final class ConsoleCest
{
    public function testCommandYii(CliTester $I): void
    {
        $command = dirname(__DIR__, 2) . '/yii';
        $I->runShellCommand($command);
        $I->seeInShellOutput('Yii Console');
    }

    public function testCommandHello(CliTester $I): void
    {
        $command = dirname(__DIR__, 2) . '/yii';
        $I->runShellCommand($command . ' hello');
        $I->seeInShellOutput('Hello!');
    }
}
