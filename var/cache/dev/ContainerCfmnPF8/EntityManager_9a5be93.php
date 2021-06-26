<?php

namespace ContainerCfmnPF8;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder46e74 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerda303 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese3e45 = [
        
    ];

    public function getConnection()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getConnection', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getMetadataFactory', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getExpressionBuilder', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'beginTransaction', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getCache', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getCache();
    }

    public function transactional($func)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'transactional', array('func' => $func), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->transactional($func);
    }

    public function commit()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'commit', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->commit();
    }

    public function rollback()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'rollback', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getClassMetadata', array('className' => $className), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'createQuery', array('dql' => $dql), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'createNamedQuery', array('name' => $name), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'createQueryBuilder', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'flush', array('entity' => $entity), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'clear', array('entityName' => $entityName), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->clear($entityName);
    }

    public function close()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'close', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->close();
    }

    public function persist($entity)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'persist', array('entity' => $entity), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'remove', array('entity' => $entity), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'refresh', array('entity' => $entity), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'detach', array('entity' => $entity), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'merge', array('entity' => $entity), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getRepository', array('entityName' => $entityName), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'contains', array('entity' => $entity), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getEventManager', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getConfiguration', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'isOpen', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getUnitOfWork', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getProxyFactory', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'initializeObject', array('obj' => $obj), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'getFilters', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'isFiltersStateClean', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'hasFilters', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return $this->valueHolder46e74->hasFilters();
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

        $instance->initializerda303 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder46e74) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder46e74 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder46e74->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, '__get', ['name' => $name], $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        if (isset(self::$publicPropertiese3e45[$name])) {
            return $this->valueHolder46e74->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46e74;

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

        $targetObject = $this->valueHolder46e74;
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
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46e74;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder46e74;
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
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, '__isset', array('name' => $name), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46e74;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder46e74;
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
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, '__unset', array('name' => $name), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46e74;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder46e74;
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
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, '__clone', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        $this->valueHolder46e74 = clone $this->valueHolder46e74;
    }

    public function __sleep()
    {
        $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, '__sleep', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;

        return array('valueHolder46e74');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerda303 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerda303;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerda303 && ($this->initializerda303->__invoke($valueHolder46e74, $this, 'initializeProxy', array(), $this->initializerda303) || 1) && $this->valueHolder46e74 = $valueHolder46e74;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder46e74;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder46e74;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
