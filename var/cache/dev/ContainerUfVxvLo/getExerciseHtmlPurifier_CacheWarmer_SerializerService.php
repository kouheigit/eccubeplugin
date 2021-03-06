<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'exercise_html_purifier.cache_warmer.serializer' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/exercise/htmlpurifier-bundle/src/CacheWarmer/SerializerCacheWarmer.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

return $this->privates['exercise_html_purifier.cache_warmer.serializer'] = new \Exercise\HTMLPurifierBundle\CacheWarmer\SerializerCacheWarmer([0 => ($this->targetDir.''.'/htmlpurifier')], [0 => 'default'], ($this->privates['exercise_html_purifier.purifiers_registry'] ?? $this->load('getExerciseHtmlPurifier_PurifiersRegistryService.php')), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));
