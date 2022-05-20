<?php
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/SystemService.php';

class SystemService_f79b835 extends \Eccube\Service\SystemService implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Eccube\Service\SystemService|null wrapped object, if the proxy is initialized
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

    public function getDbversion()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'getDbversion', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->getDbversion();
    }

    public function canSetMemoryLimit($memory)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'canSetMemoryLimit', array('memory' => $memory), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->canSetMemoryLimit($memory);
    }

    public function getMemoryLimit()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'getMemoryLimit', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->getMemoryLimit();
    }

    public function switchMaintenance($isEnable = false, $mode = 'auto_maintenance', bool $force = false)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'switchMaintenance', array('isEnable' => $isEnable, 'mode' => $mode, 'force' => $force), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->switchMaintenance($isEnable, $mode, $force);
    }

    public function getMaintenanceToken() : ?string
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'getMaintenanceToken', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->getMaintenanceToken();
    }

    public function disableMaintenanceEvent(\Symfony\Component\HttpKernel\Event\PostResponseEvent $event)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'disableMaintenanceEvent', array('event' => $event), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->disableMaintenanceEvent($event);
    }

    public function enableMaintenance($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'enableMaintenance', array('mode' => $mode, 'force' => $force), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        $this->valueHolder501ee->enableMaintenance($mode, $force);
return;
    }

    public function disableMaintenance($mode = 'auto_maintenance')
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'disableMaintenance', array('mode' => $mode), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->disableMaintenance($mode);
    }

    public function disableMaintenanceNow($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'disableMaintenanceNow', array('mode' => $mode, 'force' => $force), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        $this->valueHolder501ee->disableMaintenanceNow($mode, $force);
return;
    }

    public function isMaintenanceMode()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'isMaintenanceMode', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->isMaintenanceMode();
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

        unset($instance->entityManager, $instance->container);

        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $instance, 'Eccube\\Service\\SystemService')->__invoke($instance);

        $instance->initializer6b148 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        static $reflection;

        if (! $this->valueHolder501ee) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\SystemService');
            $this->valueHolder501ee = $reflection->newInstanceWithoutConstructor();
        unset($this->entityManager, $this->container);

        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);

        }

        $this->valueHolder501ee->__construct($entityManager, $container);
    }

    public function & __get($name)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, '__get', ['name' => $name], $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        if (isset(self::$publicProperties721d8[$name])) {
            return $this->valueHolder501ee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

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
        unset($this->entityManager, $this->container);

        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
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
