Cron
==========

> Cron - G4 Cron like parser with ability to parse expressions with resolution in seconds - based on PHP Cron Expression Parser

## Install

> Using Composer and Packagist

```sh
composer require g4/cron
```

```php
require_once 'vendor/autoload.php';

$expression = \G4\Cron\CronExpression::factory('*/3 * * * * * *');

echo date('Y-m-d H:i:s'), ' = ', $expression->getNextRunDate()->format('Y-m-d H:i:s'), PHP_EOL;
echo date('Y-m-d H:i:s'), ' = ', $expression->getPreviousRunDate()->format('Y-m-d H:i:s'), PHP_EOL;
```

## Development

### Install dependencies

    $ make install

### Run tests

    $ make test

## License

(The MIT License)
see LICENSE file for details...
