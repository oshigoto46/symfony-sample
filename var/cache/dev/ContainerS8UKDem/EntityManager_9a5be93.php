<?php

namespace ContainerS8UKDem;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder817fa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbf5c2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3f638 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getConnection', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getMetadataFactory', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getExpressionBuilder', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'beginTransaction', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getCache', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'transactional', array('func' => $func), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->transactional($func);
    }

    public function commit()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'commit', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->commit();
    }

    public function rollback()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'rollback', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getClassMetadata', array('className' => $className), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'createQuery', array('dql' => $dql), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'createNamedQuery', array('name' => $name), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'createQueryBuilder', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'flush', array('entity' => $entity), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'clear', array('entityName' => $entityName), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->clear($entityName);
    }

    public function close()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'close', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->close();
    }

    public function persist($entity)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'persist', array('entity' => $entity), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'remove', array('entity' => $entity), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'refresh', array('entity' => $entity), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'detach', array('entity' => $entity), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'merge', array('entity' => $entity), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'contains', array('entity' => $entity), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getEventManager', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getConfiguration', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'isOpen', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getUnitOfWork', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getProxyFactory', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'initializeObject', array('obj' => $obj), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'getFilters', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'isFiltersStateClean', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'hasFilters', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return $this->valueHolder817fa->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbf5c2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder817fa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder817fa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder817fa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, '__get', ['name' => $name], $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        if (isset(self::$publicProperties3f638[$name])) {
            return $this->valueHolder817fa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder817fa;

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

        $targetObject = $this->valueHolder817fa;
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
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder817fa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder817fa;
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
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, '__isset', array('name' => $name), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder817fa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder817fa;
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
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, '__unset', array('name' => $name), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder817fa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder817fa;
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
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, '__clone', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        $this->valueHolder817fa = clone $this->valueHolder817fa;
    }

    public function __sleep()
    {
        $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, '__sleep', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;

        return array('valueHolder817fa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbf5c2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbf5c2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbf5c2 && ($this->initializerbf5c2->__invoke($valueHolder817fa, $this, 'initializeProxy', array(), $this->initializerbf5c2) || 1) && $this->valueHolder817fa = $valueHolder817fa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder817fa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder817fa;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
