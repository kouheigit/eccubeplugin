<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.doctrine_migrations.migrate_command' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/DBAL/Migrations/Tools/Console/Command/AbstractCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/DBAL/Migrations/Tools/Console/Command/MigrateCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsMigrateDoctrineCommand.php';

return $this->services['console.command.public_alias.doctrine_migrations.migrate_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand();
