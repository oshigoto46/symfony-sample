<?php

namespace ContainerB75E6Rm;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaa43a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer671e5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseef95 = [
        
    ];

    public function getConnection()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getConnection', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getMetadataFactory', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getExpressionBuilder', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'beginTransaction', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getCache', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'transactional', array('func' => $func), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->transactional($func);
    }

    public function commit()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'commit', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->commit();
    }

    public function rollback()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'rollback', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getClassMetadata', array('className' => $className), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'createQuery', array('dql' => $dql), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'createNamedQuery', array('name' => $name), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'createQueryBuilder', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'flush', array('entity' => $entity), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'clear', array('entityName' => $entityName), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->clear($entityName);
    }

    public function close()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'close', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->close();
    }

    public function persist($entity)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'persist', array('entity' => $entity), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'remove', array('entity' => $entity), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'refresh', array('entity' => $entity), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'detach', array('entity' => $entity), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'merge', array('entity' => $entity), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'contains', array('entity' => $entity), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getEventManager', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getConfiguration', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'isOpen', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getUnitOfWork', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getProxyFactory', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'initializeObject', array('obj' => $obj), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'getFilters', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'isFiltersStateClean', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'hasFilters', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return $this->valueHolderaa43a->hasFilters();
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

        $instance->initializer671e5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaa43a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaa43a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaa43a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, '__get', ['name' => $name], $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        if (isset(self::$publicPropertieseef95[$name])) {
            return $this->valueHolderaa43a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa43a;

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

        $targetObject = $this->valueHolderaa43a;
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
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa43a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaa43a;
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
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, '__isset', array('name' => $name), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa43a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaa43a;
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
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, '__unset', array('name' => $name), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaa43a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaa43a;
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
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, '__clone', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        $this->valueHolderaa43a = clone $this->valueHolderaa43a;
    }

    public function __sleep()
    {
        $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, '__sleep', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;

        return array('valueHolderaa43a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer671e5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer671e5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer671e5 && ($this->initializer671e5->__invoke($valueHolderaa43a, $this, 'initializeProxy', array(), $this->initializer671e5) || 1) && $this->valueHolderaa43a = $valueHolderaa43a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaa43a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaa43a;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
