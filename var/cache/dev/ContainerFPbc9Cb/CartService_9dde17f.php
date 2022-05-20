<?php
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/CartService.php';

class CartService_9dde17f extends \Eccube\Service\CartService implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Eccube\Service\CartService|null wrapped object, if the proxy is initialized
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

    public function getCarts($empty_delete = false)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'getCarts', array('empty_delete' => $empty_delete), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->getCarts($empty_delete);
    }

    public function getPersistedCarts()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'getPersistedCarts', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->getPersistedCarts();
    }

    public function getSessionCarts()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'getSessionCarts', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->getSessionCarts();
    }

    public function mergeFromPersistedCart()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'mergeFromPersistedCart', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->mergeFromPersistedCart();
    }

    public function getCart()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'getCart', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->getCart();
    }

    public function addProduct($ProductClass, $quantity = 1)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'addProduct', array('ProductClass' => $ProductClass, 'quantity' => $quantity), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->addProduct($ProductClass, $quantity);
    }

    public function removeProduct($ProductClass)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'removeProduct', array('ProductClass' => $ProductClass), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->removeProduct($ProductClass);
    }

    public function save()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'save', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->save();
    }

    public function setPreOrderId($pre_order_id)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'setPreOrderId', array('pre_order_id' => $pre_order_id), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->setPreOrderId($pre_order_id);
    }

    public function getPreOrderId()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'getPreOrderId', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->getPreOrderId();
    }

    public function clear()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'clear', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->clear();
    }

    public function setCartItemComparator($cartItemComparator)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'setCartItemComparator', array('cartItemComparator' => $cartItemComparator), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->setCartItemComparator($cartItemComparator);
    }

    public function setPrimary($cartKey)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'setPrimary', array('cartKey' => $cartKey), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->setPrimary($cartKey);
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

        unset($instance->carts, $instance->session, $instance->entityManager, $instance->cart, $instance->productClassRepository, $instance->cartRepository, $instance->cartItemComparator, $instance->cartItemAllocator, $instance->orderRepository, $instance->tokenStorage, $instance->authorizationChecker);

        $instance->initializer6b148 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\HttpFoundation\Session\SessionInterface $session, \Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\ProductClassRepository $productClassRepository, \Eccube\Repository\CartRepository $cartRepository, \Eccube\Service\Cart\CartItemComparator $cartItemComparator, \Eccube\Service\Cart\CartItemAllocator $cartItemAllocator, \Eccube\Repository\OrderRepository $orderRepository, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker)
    {
        static $reflection;

        if (! $this->valueHolder501ee) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\CartService');
            $this->valueHolder501ee = $reflection->newInstanceWithoutConstructor();
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);

        }

        $this->valueHolder501ee->__construct($session, $entityManager, $productClassRepository, $cartRepository, $cartItemComparator, $cartItemAllocator, $orderRepository, $tokenStorage, $authorizationChecker);
    }

    public function & __get($name)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, '__get', ['name' => $name], $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        if (isset(self::$publicProperties721d8[$name])) {
            return $this->valueHolder501ee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);
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
