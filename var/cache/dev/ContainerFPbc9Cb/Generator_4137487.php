<?php
include_once \dirname(__DIR__, 4).'/tests/Eccube/Tests/Fixture/Generator.php';

class Generator_4137487 extends \Eccube\Tests\Fixture\Generator implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Eccube\Tests\Fixture\Generator|null wrapped object, if the proxy is initialized
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

    public function createMember($username = null)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createMember', array('username' => $username), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createMember($username);
    }

    public function createCustomer($email = null)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createCustomer', array('email' => $email), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createCustomer($email);
    }

    public function createCustomerAddress(\Eccube\Entity\Customer $Customer, $is_nonmember = false)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createCustomerAddress', array('Customer' => $Customer, 'is_nonmember' => $is_nonmember), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createCustomerAddress($Customer, $is_nonmember);
    }

    public function createNonMember($email = null)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createNonMember', array('email' => $email), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createNonMember($email);
    }

    public function createProduct($product_name = null, $product_class_num = 3, $image_type = null)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createProduct', array('product_name' => $product_name, 'product_class_num' => $product_class_num, 'image_type' => $image_type), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createProduct($product_name, $product_class_num, $image_type);
    }

    public function createOrder(\Eccube\Entity\Customer $Customer, array $ProductClasses = [], ?\Eccube\Entity\Delivery $Delivery = null, $add_charge = 0, $add_discount = 0, $statusTypeId = null)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createOrder', array('Customer' => $Customer, 'ProductClasses' => $ProductClasses, 'Delivery' => $Delivery, 'add_charge' => $add_charge, 'add_discount' => $add_discount, 'statusTypeId' => $statusTypeId), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createOrder($Customer, $ProductClasses, $Delivery, $add_charge, $add_discount, $statusTypeId);
    }

    public function createPayment(\Eccube\Entity\Delivery $Delivery, $method, $charge = 0, $rule_min = 0, $rule_max = 999999999)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createPayment', array('Delivery' => $Delivery, 'method' => $method, 'charge' => $charge, 'rule_min' => $rule_min, 'rule_max' => $rule_max), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createPayment($Delivery, $method, $charge, $rule_min, $rule_max);
    }

    public function createDelivery($delivery_time_max_pattern = 5)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createDelivery', array('delivery_time_max_pattern' => $delivery_time_max_pattern), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createDelivery($delivery_time_max_pattern);
    }

    public function createPage()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createPage', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createPage();
    }

    public function createLoginHistory($user_name, $client_ip = null, $status = null, $Member = null)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createLoginHistory', array('user_name' => $user_name, 'client_ip' => $client_ip, 'status' => $status, 'Member' => $Member), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createLoginHistory($user_name, $client_ip, $status, $Member);
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

        unset($instance->locale, $instance->entityManager, $instance->passwordEncoder, $instance->memberRepository, $instance->customerRepository, $instance->classNameRepository, $instance->classCategoryRepository, $instance->durationRepository, $instance->deliveryFeeRepository, $instance->paymentRepository, $instance->taxRuleRepository, $instance->pageRepository, $instance->PrefRepository, $instance->session, $instance->orderPurchaseFlow);

        \Closure::bind(function (\Eccube\Tests\Fixture\Generator $instance) {
            unset($instance->categoryRepository, $instance->tagRepository, $instance->prefRepository);
        }, $instance, 'Eccube\\Tests\\Fixture\\Generator')->__invoke($instance);

        $instance->initializer6b148 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Security\Core\Encoder\PasswordEncoder $passwordEncoder, \Eccube\Repository\MemberRepository $memberRepository, \Eccube\Repository\CategoryRepository $categoryRepository, \Eccube\Repository\CustomerRepository $customerRepository, \Eccube\Repository\ClassNameRepository $classNameRepository, \Eccube\Repository\ClassCategoryRepository $classCategoryRepository, \Eccube\Repository\DeliveryDurationRepository $durationRepository, \Eccube\Repository\DeliveryFeeRepository $deliveryFeeRepository, \Eccube\Repository\PaymentRepository $paymentRepository, \Eccube\Repository\PageRepository $pageRepository, \Eccube\Repository\Master\PrefRepository $prefRepository, \Eccube\Repository\TagRepository $tagRepository, \Eccube\Repository\TaxRuleRepository $taxRuleRepository, \Eccube\Service\PurchaseFlow\PurchaseFlow $orderPurchaseFlow, \Symfony\Component\HttpFoundation\Session\SessionInterface $session, $locale = 'ja_JP')
    {
        static $reflection;

        if (! $this->valueHolder501ee) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Tests\\Fixture\\Generator');
            $this->valueHolder501ee = $reflection->newInstanceWithoutConstructor();
        unset($this->locale, $this->entityManager, $this->passwordEncoder, $this->memberRepository, $this->customerRepository, $this->classNameRepository, $this->classCategoryRepository, $this->durationRepository, $this->deliveryFeeRepository, $this->paymentRepository, $this->taxRuleRepository, $this->pageRepository, $this->PrefRepository, $this->session, $this->orderPurchaseFlow);

        \Closure::bind(function (\Eccube\Tests\Fixture\Generator $instance) {
            unset($instance->categoryRepository, $instance->tagRepository, $instance->prefRepository);
        }, $this, 'Eccube\\Tests\\Fixture\\Generator')->__invoke($this);

        }

        $this->valueHolder501ee->__construct($entityManager, $passwordEncoder, $memberRepository, $categoryRepository, $customerRepository, $classNameRepository, $classCategoryRepository, $durationRepository, $deliveryFeeRepository, $paymentRepository, $pageRepository, $prefRepository, $tagRepository, $taxRuleRepository, $orderPurchaseFlow, $session, $locale);
    }

    public function & __get($name)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, '__get', ['name' => $name], $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        if (isset(self::$publicProperties721d8[$name])) {
            return $this->valueHolder501ee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Tests\\Fixture\\Generator');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Tests\\Fixture\\Generator');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Tests\\Fixture\\Generator');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Tests\\Fixture\\Generator');

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
        unset($this->locale, $this->entityManager, $this->passwordEncoder, $this->memberRepository, $this->customerRepository, $this->classNameRepository, $this->classCategoryRepository, $this->durationRepository, $this->deliveryFeeRepository, $this->paymentRepository, $this->taxRuleRepository, $this->pageRepository, $this->PrefRepository, $this->session, $this->orderPurchaseFlow);

        \Closure::bind(function (\Eccube\Tests\Fixture\Generator $instance) {
            unset($instance->categoryRepository, $instance->tagRepository, $instance->prefRepository);
        }, $this, 'Eccube\\Tests\\Fixture\\Generator')->__invoke($this);
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
