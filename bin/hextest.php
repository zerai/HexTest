#!/usr/bin/env php
<?php
require __DIR__.'/../vendor/autoload.php';

$application = new \HexTest\Infrastructure\Ui\Console\Application();
$application->setContainer(HexTest\Infrastructure\Ui\Web\Silex\Application::bootstrap());
//$application->add(new \Lw\Infrastructure\Ui\Console\Command\PushNotificationsCommand());

$application->add(new \HexTest\Infrastructure\Ui\Console\Command\AlphaCreateCommand());
$application->add(new \HexTest\Infrastructure\Ui\Console\Command\UserCreateCommand());
$application->add(new \HexTest\Infrastructure\Ui\Console\Command\TicketCreateCommand());
$application->add(new \HexTest\Infrastructure\Ui\Console\Command\TaskCreateCommand());
$application->run();
