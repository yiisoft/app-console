<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\Tests\Support\UnitTester;
use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\CommandLoader\ContainerCommandLoader;
use Symfony\Component\Console\Tester\CommandTester;
use Yiisoft\Config\Config;
use Yiisoft\Yii\Console\ExitCode;
use Yiisoft\Yii\Runner\Console\ConsoleApplicationRunner;

final class EchoCest
{
    private Config $config;
    private ContainerInterface $container;

    public function _before(UnitTester $I): void
    {
        $runner = new ConsoleApplicationRunner(
            rootPath: dirname(__DIR__, 2),
            environment: $_ENV['YII_ENV']
        );
        $this->config = $runner->getConfig();
        $this->container = $runner->getContainer();
    }

    public function testExecute(UnitTester $I): void
    {
        $app = new Application();

        $params = $this->config->get('params');

        $loader = new ContainerCommandLoader(
            $this->container,
            $params['yiisoft/yii-console']['commands']
        );

        $app->setCommandLoader($loader);

        $command = $app->find('echo');

        $commandCreate = new CommandTester($command);

        $I->assertSame(ExitCode::OK, $commandCreate->execute([]));

        $output = $commandCreate->getDisplay(true);

        $I->assertStringContainsString('Hello!', $output);
    }

    public function testExecuteWithArgument(UnitTester $I): void
    {
        $app = new Application();

        $params = $this->config->get('params');

        $loader = new ContainerCommandLoader(
            $this->container,
            $params['yiisoft/yii-console']['commands']
        );

        $app->setCommandLoader($loader);

        $command = $app->find('echo');

        $commandCreate = new CommandTester($command);

        $I->assertSame(ExitCode::OK, $commandCreate->execute(['sentence' => 'Foo!']));

        $output = $commandCreate->getDisplay(true);

        $I->assertStringContainsString('Foo!', $output);
    }
}
