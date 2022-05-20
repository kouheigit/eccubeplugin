<?php
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PluginService.php';

class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Eccube\Service\PluginService|null wrapped object, if the proxy is initialized
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

    public function install($path, $source = 0)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'install', array('path' => $path, 'source' => $source), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->install($path, $source);
    }

    public function installWithCode($code)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'installWithCode', array('code' => $code), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->installWithCode($code);
    }

    public function preInstall()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'preInstall', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->preInstall();
    }

    public function postInstall($config, $source)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->postInstall($config, $source);
    }

    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }

    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }

    public function createTempDir()
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createTempDir', array(), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createTempDir();
    }

    public function deleteDirs($arr)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'deleteDirs', array('arr' => $arr), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->deleteDirs($arr);
    }

    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->unpackPluginArchive($archive, $dir);
    }

    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->checkPluginArchiveContent($dir, $config_cache);
    }

    public function readConfig($pluginDir)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->readConfig($pluginDir);
    }

    public function checkSymbolName($string)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'checkSymbolName', array('string' => $string), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->checkSymbolName($string);
    }

    public function deleteFile($path)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'deleteFile', array('path' => $path), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->deleteFile($path);
    }

    public function checkSamePlugin($code)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'checkSamePlugin', array('code' => $code), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->checkSamePlugin($code);
    }

    public function calcPluginDir($code)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'calcPluginDir', array('code' => $code), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->calcPluginDir($code);
    }

    public function createPluginDir($d)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'createPluginDir', array('d' => $d), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->createPluginDir($d);
    }

    public function registerPlugin($meta, $source = 0)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->registerPlugin($meta, $source);
    }

    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->callPluginManagerMethod($meta, $method);
    }

    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->uninstall($plugin, $force);
    }

    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'unregisterPlugin', array('p' => $p), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->unregisterPlugin($p);
    }

    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'disable', array('plugin' => $plugin), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->disable($plugin);
    }

    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->enable($plugin, $enable);
    }

    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->update($plugin, $path);
    }

    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->updatePlugin($plugin, $meta);
    }

    public function getPluginRequired($plugin)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->getPluginRequired($plugin);
    }

    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->findDependentPluginNeedDisable($pluginCode);
    }

    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->findDependentPlugin($pluginCode, $enableOnly);
    }

    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->getDependentByCode($pluginCode, $libraryType);
    }

    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->parseToComposerCommand($packages, $getVersion);
    }

    public function copyAssets($pluginCode)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->copyAssets($pluginCode);
    }

    public function removeAssets($pluginCode)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->removeAssets($pluginCode);
    }

    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        return $this->valueHolder501ee->checkPluginExist($plugins, $pluginCode);
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

        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);

        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);

        $instance->initializer6b148 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;

        if (! $this->valueHolder501ee) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHolder501ee = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);

        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);

        }

        $this->valueHolder501ee->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }

    public function & __get($name)
    {
        $this->initializer6b148 && ($this->initializer6b148->__invoke($valueHolder501ee, $this, '__get', ['name' => $name], $this->initializer6b148) || 1) && $this->valueHolder501ee = $valueHolder501ee;

        if (isset(self::$publicProperties721d8[$name])) {
            return $this->valueHolder501ee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');

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
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);

        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
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
