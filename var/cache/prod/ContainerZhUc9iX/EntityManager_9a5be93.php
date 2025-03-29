<?php

namespace ContainerZhUc9iX;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8ba7c = null;
    private $initializer6a9d4 = null;
    private static $publicPropertiesdba30 = [
        
    ];
    public function getConnection()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getConnection', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getMetadataFactory', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getExpressionBuilder', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'beginTransaction', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getCache', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getCache();
    }
    public function transactional($func)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'transactional', array('func' => $func), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'commit', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->commit();
    }
    public function rollback()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'rollback', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getClassMetadata', array('className' => $className), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'createQuery', array('dql' => $dql), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'createNamedQuery', array('name' => $name), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'createQueryBuilder', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'flush', array('entity' => $entity), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'clear', array('entityName' => $entityName), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->clear($entityName);
    }
    public function close()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'close', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->close();
    }
    public function persist($entity)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'persist', array('entity' => $entity), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'remove', array('entity' => $entity), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->remove($entity);
    }
    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->refresh($entity, $lockMode);
    }
    public function detach($entity)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'detach', array('entity' => $entity), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'merge', array('entity' => $entity), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'contains', array('entity' => $entity), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getEventManager', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getConfiguration', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'isOpen', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getUnitOfWork', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getProxyFactory', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'initializeObject', array('obj' => $obj), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->initializeObject($obj);
    }
    public function isUninitializedObject($obj) : bool
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->isUninitializedObject($obj);
    }
    public function getFilters()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'getFilters', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'isFiltersStateClean', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'hasFilters', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return $this->valueHolder8ba7c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer6a9d4 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;
        if (! $this->valueHolder8ba7c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8ba7c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8ba7c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, '__get', ['name' => $name], $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        if (isset(self::$publicPropertiesdba30[$name])) {
            return $this->valueHolder8ba7c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ba7c;
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
        $targetObject = $this->valueHolder8ba7c;
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
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ba7c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8ba7c;
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
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, '__isset', array('name' => $name), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ba7c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8ba7c;
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
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, '__unset', array('name' => $name), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ba7c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8ba7c;
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
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, '__clone', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        $this->valueHolder8ba7c = clone $this->valueHolder8ba7c;
    }
    public function __sleep()
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, '__sleep', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        return array('valueHolder8ba7c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer6a9d4 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6a9d4;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'initializeProxy', array(), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8ba7c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8ba7c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
