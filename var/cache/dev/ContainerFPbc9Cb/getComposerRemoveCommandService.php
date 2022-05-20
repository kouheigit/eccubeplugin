<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Command\ComposerRemoveCommand' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Command/ComposerRemoveCommand.php';

$this->privates['Eccube\\Command\\ComposerRemoveCommand'] = $instance = new \Eccube\Command\ComposerRemoveCommand(($this->services['Eccube\\Service\\Composer\\ComposerApiService'] ?? $this->load('getComposerApiServiceService.php')));

$instance->setName('eccube:composer:remove');

return $instance;