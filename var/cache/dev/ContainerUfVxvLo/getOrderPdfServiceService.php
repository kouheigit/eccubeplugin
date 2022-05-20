<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\OrderPdfService' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/tecnickcom/tcpdf/tcpdf.php';
include_once \dirname(__DIR__, 4).'/vendor/setasign/fpdi/src/FpdiTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/setasign/fpdi/src/Tcpdf/Fpdi.php';
include_once \dirname(__DIR__, 4).'/vendor/setasign/fpdi/src/TcpdfFpdi.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/OrderPdfService.php';

return $this->privates['Eccube\\Service\\OrderPdfService'] = new \Eccube\Service\OrderPdfService(($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))), ($this->privates['Eccube\\Repository\\OrderRepository'] ?? $this->getOrderRepositoryService()), ($this->privates['Eccube\\Repository\\ShippingRepository'] ?? $this->load('getShippingRepositoryService.php')), ($this->services['Eccube\\Service\\TaxRuleService'] ?? $this->load('getTaxRuleServiceService.php')), ($this->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $this->getBaseInfoRepositoryService()), ($this->privates['Eccube\\Twig\\Extension\\EccubeExtension'] ?? $this->getEccubeExtensionService()), ($this->privates['Eccube\\Twig\\Extension\\TaxExtension'] ?? $this->getTaxExtensionService()));