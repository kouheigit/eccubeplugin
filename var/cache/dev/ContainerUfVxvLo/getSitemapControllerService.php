<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Controller\SitemapController' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Controller/SitemapController.php';

$this->services['Eccube\\Controller\\SitemapController'] = $instance = new \Eccube\Controller\SitemapController(($this->privates['Eccube\\Repository\\CategoryRepository'] ?? $this->load('getCategoryRepositoryService.php')), ($this->privates['Eccube\\Repository\\PageRepository'] ?? $this->getPageRepositoryService()), ($this->privates['Eccube\\Repository\\Master\\ProductListOrderByRepository'] ?? $this->load('getProductListOrderByRepositoryService.php')), ($this->privates['Eccube\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $this->getBaseInfoRepositoryService()));

$instance->setEccubeConfig(($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))));
$instance->setEntityManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
$instance->setSession(($this->services['session'] ?? $this->getSessionService()));
$instance->setFormFactory(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')));
$instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

return $instance;
