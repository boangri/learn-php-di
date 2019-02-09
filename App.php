<?php

require 'vendor/autoload.php';

//$container = new DI\Container();

$builder = new DI\ContainerBuilder();
$builder->addDefinitions(__DIR__ . '/config.php');
$builder->enableCompilation(__DIR__ . '/tmp');
$builder->writeProxiesToFile(true, __DIR__ . '/tmp/proxies');


$container = $builder->build();

$userManager = $container->get('\Boangri\LearnPhpDi\UserManager');

$userManager->register('boris@xland.ru', '123456');
