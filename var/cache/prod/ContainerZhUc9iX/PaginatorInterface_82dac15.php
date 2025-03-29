<?php

namespace ContainerZhUc9iX;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder8ba7c = null;
    private $initializer6a9d4 = null;
    private static $publicPropertiesdba30 = [
        
    ];
    public function paginate(mixed $target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        if ($this->valueHolder8ba7c === $returnValue = $this->valueHolder8ba7c->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer6a9d4 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder8ba7c) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder8ba7c = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer6a9d4 && ($this->initializer6a9d4->__invoke($valueHolder8ba7c, $this, '__get', ['name' => $name], $this->initializer6a9d4) || 1) && $this->valueHolder8ba7c = $valueHolder8ba7c;
        if (isset(self::$publicPropertiesdba30[$name])) {
            return $this->valueHolder8ba7c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
