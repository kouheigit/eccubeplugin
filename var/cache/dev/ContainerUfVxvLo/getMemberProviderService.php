<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Security\Core\User\MemberProvider' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/User/UserProviderInterface.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Security/Core/User/MemberProvider.php';

return $this->privates['Eccube\\Security\\Core\\User\\MemberProvider'] = new \Eccube\Security\Core\User\MemberProvider(($this->privates['Eccube\\Repository\\MemberRepository'] ?? $this->load('getMemberRepositoryService.php')));
