<?php

namespace ContainerHePDJu5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0921d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4830d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1ac6d = [
        
    ];

    public function getConnection()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getConnection', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getMetadataFactory', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getExpressionBuilder', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'beginTransaction', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getCache', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'transactional', array('func' => $func), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->transactional($func);
    }

    public function commit()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'commit', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->commit();
    }

    public function rollback()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'rollback', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getClassMetadata', array('className' => $className), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'createQuery', array('dql' => $dql), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'createNamedQuery', array('name' => $name), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'createQueryBuilder', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'flush', array('entity' => $entity), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'clear', array('entityName' => $entityName), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->clear($entityName);
    }

    public function close()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'close', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->close();
    }

    public function persist($entity)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'persist', array('entity' => $entity), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'remove', array('entity' => $entity), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'refresh', array('entity' => $entity), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'detach', array('entity' => $entity), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'merge', array('entity' => $entity), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'contains', array('entity' => $entity), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getEventManager', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getConfiguration', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'isOpen', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getUnitOfWork', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getProxyFactory', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'initializeObject', array('obj' => $obj), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'getFilters', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'isFiltersStateClean', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'hasFilters', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return $this->valueHolder0921d->hasFilters();
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

        $instance->initializer4830d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0921d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0921d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0921d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, '__get', ['name' => $name], $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        if (isset(self::$publicProperties1ac6d[$name])) {
            return $this->valueHolder0921d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0921d;

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

        $targetObject = $this->valueHolder0921d;
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
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0921d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0921d;
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
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, '__isset', array('name' => $name), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0921d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0921d;
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
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, '__unset', array('name' => $name), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0921d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0921d;
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
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, '__clone', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        $this->valueHolder0921d = clone $this->valueHolder0921d;
    }

    public function __sleep()
    {
        $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, '__sleep', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;

        return array('valueHolder0921d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4830d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4830d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4830d && ($this->initializer4830d->__invoke($valueHolder0921d, $this, 'initializeProxy', array(), $this->initializer4830d) || 1) && $this->valueHolder0921d = $valueHolder0921d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0921d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0921d;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
