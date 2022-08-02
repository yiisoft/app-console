<?php

declare(strict_types=1);

namespace App\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Yiisoft\Yii\Console\ExitCode;

final class Hello extends Command
{
    protected static $defaultName = 'hello';
    protected static $defaultDescription = 'An example command';

    private string $sentence = 'sentence';

    public function __construct()
    {
        parent::__construct();
    }

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
        $output->writeln("You says: {$input->getArgument('sentence')}");

        return ExitCode::OK;
    }
}
