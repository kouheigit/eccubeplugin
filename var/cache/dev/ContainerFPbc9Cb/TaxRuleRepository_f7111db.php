<?php
include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/TaxRuleRepository.php';

class TaxRuleRepository_f7111db extends \Eccube\Repository\TaxRuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Eccube\Repository\TaxRuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder501ee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6b148 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties721d8 = [
        
    ];

    public function newTaxRule()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'newTaxRule', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->newTaxRule();
    }

    public function getByRule($Product = null, $ProductClass = null, $Pref = null, $Country = null)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'getByRule', array('Product' => $Product, 'ProductClass' => $ProductClass, 'Pref' => $Pref, 'Country' => $Country), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->getByRule($Product, $ProductClass, $Pref, $Country);
    }

    public function getList()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'getList', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->getList();
    }

    public function delete($TaxRule)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'delete', array('TaxRule' => $TaxRule), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->delete($TaxRule);
    }

    public function clearCache()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'clearCache', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->clearCache();
    }

    public function save($entity)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'save', array('entity' => $entity), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->save($entity);
    }

    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createQueryBuilder($alias, $indexBy);
    }

    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createResultSetMappingBuilder($alias);
    }

    public function createNamedQuery($queryName)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createNamedQuery($queryName);
    }

    public function createNativeNamedQuery($queryName)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createNativeNamedQuery($queryName);
    }

    public function clear()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'clear', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->clear();
    }

    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->find($id, $lockMode, $lockVersion);
    }

    public function findAll()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'findAll', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->findAll();
    }

    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->findOneBy($criteria, $orderBy);
    }

    public function count(array $criteria)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'count', array('criteria' => $criteria), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->count($criteria);
    }

    public function __call($method, $arguments)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->__call($method, $arguments);
    }

    public function getClassName()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'getClassName', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->getClassName();
    }

    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'matching', array('criteria' => $criteria), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->matching($criteria);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->baseInfo, $instance->authorizationChecker, $instance->tokenStorage, $instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);

        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $instance, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($instance);

        $instance->initializer6b148 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Bridge\Doctrine\RegistryInterface $registry, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Common\EccubeConfig $eccubeConfig)
    {
        static $reflection;

        if (! $this->valueHolder501ee) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');
            $this->valueHolder501ee = $reflection->newInstanceWithoutConstructor();
        unset($this->baseInfo, $this->authorizationChecker, $this->tokenStorage, $this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);

        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $this, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($this);

        }

        $this->valueHolder501ee->__construct($registry, $tokenStorage, $authorizationChecker, $baseInfoRepository, $eccubeConfig);
    }

    public function & __get($name)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, '__get', ['name' => $name], $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        if (isset(self::$publicProperties721d8[$name])) {
            return $this->valueHolder501ee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder501ee;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder501ee;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder501ee;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder501ee;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, '__isset', array('name' => $name), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder501ee;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder501ee;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, '__unset', array('name' => $name), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\TaxRuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder501ee;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder501ee;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, '__clone', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        $this->valueHolder501ee = clone $this->valueHolder501ee;
    }

    public function __sleep()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, '__sleep', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return array('valueHolder501ee');
    }

    public function __wakeup()
    {
        unset($this->baseInfo, $this->authorizationChecker, $this->tokenStorage, $this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);

        \Closure::bind(function (\Eccube\Repository\TaxRuleRepository $instance) {
            unset($instance->rules);
        }, $this, 'Eccube\\Repository\\TaxRuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6b148 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6b148;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'initializeProxy', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder501ee;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder501ee;
    }


}
