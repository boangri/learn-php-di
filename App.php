<?php

require 'vendor/autoload.php';

//$container = new DI\Container();

$builder = new DI\ContainerBuilder();
$container = $builder->build();
$userManager = $container->get('\Boangri\UserManager');

$userManager->register('boris@xland.ru', '123456');
