<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder04041 = null;
    private $initializer8fcb2 = null;
    private static $publicPropertiese7fd4 = [
        
    ];
    public function getConnection()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getConnection', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getMetadataFactory', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getExpressionBuilder', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'beginTransaction', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getCache', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getCache();
    }
    public function transactional($func)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'transactional', array('func' => $func), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'commit', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->commit();
    }
    public function rollback()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'rollback', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getClassMetadata', array('className' => $className), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'createQuery', array('dql' => $dql), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'createNamedQuery', array('name' => $name), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'createQueryBuilder', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'flush', array('entity' => $entity), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'clear', array('entityName' => $entityName), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->clear($entityName);
    }
    public function close()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'close', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->close();
    }
    public function persist($entity)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'persist', array('entity' => $entity), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'remove', array('entity' => $entity), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'refresh', array('entity' => $entity), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'detach', array('entity' => $entity), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'merge', array('entity' => $entity), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'contains', array('entity' => $entity), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getEventManager', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getConfiguration', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'isOpen', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getUnitOfWork', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getProxyFactory', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'initializeObject', array('obj' => $obj), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'getFilters', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'isFiltersStateClean', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'hasFilters', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return $this->valueHolder04041->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer8fcb2 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder04041) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder04041 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder04041->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, '__get', ['name' => $name], $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        if (isset(self::$publicPropertiese7fd4[$name])) {
            return $this->valueHolder04041->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04041;
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
        $targetObject = $this->valueHolder04041;
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
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04041;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder04041;
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
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, '__isset', array('name' => $name), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04041;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder04041;
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
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, '__unset', array('name' => $name), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04041;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder04041;
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
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, '__clone', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        $this->valueHolder04041 = clone $this->valueHolder04041;
    }
    public function __sleep()
    {
        $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, '__sleep', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
        return array('valueHolder04041');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8fcb2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8fcb2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer8fcb2 && ($this->initializer8fcb2->__invoke($valueHolder04041, $this, 'initializeProxy', array(), $this->initializer8fcb2) || 1) && $this->valueHolder04041 = $valueHolder04041;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder04041;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder04041;
    }
}
