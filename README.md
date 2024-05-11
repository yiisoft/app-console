<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://yiisoft.github.io/docs/images/yii_logo.svg" height="100px" alt="Yii">
    </a>
    <h1 align="center">Yii Console Application</h1>
    <br>
</p>

[![Latest Stable Version](https://poser.pugx.org/yiisoft/app-console/v/stable.png)](https://packagist.org/packages/yiisoft/app-console)
[![Total Downloads](https://poser.pugx.org/yiisoft/app-console/downloads.png)](https://packagist.org/packages/yiisoft/app-console)
[![Build status](https://github.com/yiisoft/app-console/workflows/build/badge.svg)](https://github.com/yiisoft/app-console/actions?query=workflow%3Abuild)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/yiisoft/app-console/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/yiisoft/app-console/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/yiisoft/app-console/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/yiisoft/app-console/?branch=master)
[![static analysis](https://github.com/yiisoft/app-console/workflows/static%20analysis/badge.svg)](https://github.com/yiisoft/app-console/actions?query=workflow%3A%22static+analysis%22)
[![type-coverage](https://shepherd.dev/github/yiisoft/app-console/coverage.svg)](https://shepherd.dev/github/yiisoft/app-console)

The package is a console application that can be used to perform common tasks in a Yii application.

## Requirements

- PHP 8.0 or higher.

## Installation

The package could be installed with [Composer](https://getcomposer.org):

```shell
composer create-project --stability=dev yiisoft/app-console <your project>
```

## General usage

### Create command console

```php
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
        $output->writeln("You said: {$input->getArgument('sentence')}");

        return ExitCode::OK;
    }
}
```

### Using command console

```shell
$ ./yii
Yii Console 1.0

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display help for the given command. When no command is given display help for the list command
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
  -n, --no-interaction  Do not ask any interactive question
      --config=CONFIG   Set alternative configuration name
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  completion       Dump the shell completion script
  hello            An example command
  help             Display help for a command
  list             List commands
  serve            Runs PHP built-in web server
 debug
  debug:container  Show information about container
  debug:events     Show information about events and listeners
  debug:reset      Clear debug data
```

```shell
$ ./yii hello
You said: Hello!

$ ./yii hello 'Code something'
You said: Code something
```

## Documentation

- [Internals](docs/internals.md)

If you need help or have a question, the [Yii Forum](https://forum.yiiframework.com/c/yii-3-0/63) is a good place for that.
You may also check out other [Yii Community Resources](https://www.yiiframework.com/community).

## License

The Yii Console Application is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.

Maintained by [Yii Software](https://www.yiiframework.com/).

## Support the project

[![Open Collective](https://img.shields.io/badge/Open%20Collective-sponsor-7eadf1?logo=open%20collective&logoColor=7eadf1&labelColor=555555)](https://opencollective.com/yiisoft)

## Follow updates

[![Official website](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](https://www.yiiframework.com/)
[![Twitter](https://img.shields.io/badge/twitter-follow-1DA1F2?logo=twitter&logoColor=1DA1F2&labelColor=555555?style=flat)](https://twitter.com/yiiframework)
[![Telegram](https://img.shields.io/badge/telegram-join-1DA1F2?style=flat&logo=telegram)](https://t.me/yii3en)
[![Facebook](https://img.shields.io/badge/facebook-join-1DA1F2?style=flat&logo=facebook&logoColor=ffffff)](https://www.facebook.com/groups/yiitalk)
[![Slack](https://img.shields.io/badge/slack-join-1DA1F2?style=flat&logo=slack)](https://yiiframework.com/go/slack)
