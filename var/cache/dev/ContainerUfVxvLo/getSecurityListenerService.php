<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\EventListener\SecurityListener' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Eccube/EventListener/SecurityListener.php';

return $this->privates['Eccube\\EventListener\\SecurityListener'] = new \Eccube\EventListener\SecurityListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['Eccube\\Service\\CartService'] ?? $this->getCartServiceService()), ($this->privates['eccube.purchase.flow.cart'] ?? $this->load('getEccube_Purchase_Flow_CartService.php')), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
