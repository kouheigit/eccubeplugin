<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'web_profiler.controller.router' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Controller/RouterController.php';

return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), NULL, new RewindableGenerator(function () {
    return new \EmptyIterator();
}, 0));
