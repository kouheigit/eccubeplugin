<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Command\ComposerInstallCommand' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Command/ComposerInstallCommand.php';

$this->privates['Eccube\\Command\\ComposerInstallCommand'] = $instance = new \Eccube\Command\ComposerInstallCommand(($this->services['Eccube\\Service\\Composer\\ComposerApiService'] ?? $this->load('getComposerApiServiceService.php')));

$instance->setName('eccube:composer:install');

return $instance;
