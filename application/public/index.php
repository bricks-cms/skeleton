<?php

use BricksFramework\Bootstrap\Bootstrap;
use BricksFramework\Environment\Environment;

// we need autoloader to get startet
/** @var \Composer\Autoload\ClassLoader $autoloader */
$autoloader = require_once '../../vendor/autoload.php';
$autoloader->setUseIncludePath(true);

// setup the environment, to tie environment with bootstrap
$environment = new Environment($autoloader);
$environment->loadEnvironment('../../');

// bring the application to ready state
$bootstrap = new Bootstrap(require '../config/bootstrap.php', $environment);
$bootstrap->bootstrap();

// execute the application
$bootstrap->getContainer()->get('run')();