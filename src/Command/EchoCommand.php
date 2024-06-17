<?php

declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Yiisoft\Yii\Console\ExitCode;

#[AsCommand(
    name: 'echo',
    description: 'An example command that echoes exactly what it is told to.'
)]
final class EchoCommand extends Command
{
    private string $sentence = 'sentence';

    protected function configure(): void
    {
        $this->setDefinition(
            new InputDefinition([
                new InputArgument($this->sentence, InputArgument::OPTIONAL, 'Sentence to say.', 'Hello!'),
            ])
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln("You said: {$input->getArgument('sentence')}");

        return ExitCode::OK;
    }
}
