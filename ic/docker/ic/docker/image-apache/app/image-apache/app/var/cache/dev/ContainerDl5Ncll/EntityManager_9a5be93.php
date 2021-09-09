<?php

namespace ContainerDl5Ncll;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5a833 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6464b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese31a4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getConnection', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getMetadataFactory', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getExpressionBuilder', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'beginTransaction', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getCache', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'transactional', array('func' => $func), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->transactional($func);
    }

    public function commit()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'commit', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->commit();
    }

    public function rollback()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'rollback', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getClassMetadata', array('className' => $className), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'createQuery', array('dql' => $dql), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'createNamedQuery', array('name' => $name), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'createQueryBuilder', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'flush', array('entity' => $entity), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'clear', array('entityName' => $entityName), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->clear($entityName);
    }

    public function close()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'close', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->close();
    }

    public function persist($entity)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'persist', array('entity' => $entity), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'remove', array('entity' => $entity), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'refresh', array('entity' => $entity), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'detach', array('entity' => $entity), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'merge', array('entity' => $entity), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'contains', array('entity' => $entity), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getEventManager', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getConfiguration', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'isOpen', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getUnitOfWork', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getProxyFactory', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'initializeObject', array('obj' => $obj), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'getFilters', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'isFiltersStateClean', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'hasFilters', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return $this->valueHolder5a833->hasFilters();
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

        $instance->initializer6464b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5a833) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5a833 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5a833->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, '__get', ['name' => $name], $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        if (isset(self::$publicPropertiese31a4[$name])) {
            return $this->valueHolder5a833->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a833;

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

        $targetObject = $this->valueHolder5a833;
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
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a833;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5a833;
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
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, '__isset', array('name' => $name), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a833;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5a833;
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
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, '__unset', array('name' => $name), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5a833;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5a833;
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
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, '__clone', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        $this->valueHolder5a833 = clone $this->valueHolder5a833;
    }

    public function __sleep()
    {
        $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, '__sleep', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;

        return array('valueHolder5a833');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6464b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6464b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6464b && ($this->initializer6464b->__invoke($valueHolder5a833, $this, 'initializeProxy', array(), $this->initializer6464b) || 1) && $this->valueHolder5a833 = $valueHolder5a833;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5a833;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5a833;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
