<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.gFBlZjv' shared service.

return $this->privates['.service_locator.gFBlZjv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Order' => ['privates', '.errored..service_locator.gFBlZjv.Eccube\\Entity\\Order', NULL, 'Cannot autowire service ".service_locator.gFBlZjv": it references class "Eccube\\Entity\\Order" but no such service exists.'],
], [
    'Order' => 'Eccube\\Entity\\Order',
]);
