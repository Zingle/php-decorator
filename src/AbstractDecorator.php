<?php

namespace ZingleCom\Decorator;

/**
 * Class AbstractDecorator
 */
abstract class AbstractDecorator implements DecoratorInterface
{
    /**
     * @var object
     */
    protected $wrapped;


    /**
     * AbstractDecorator constructor.
     * @param object $wrapped
     */
    public function __construct($wrapped)
    {
        $this->wrapped = $wrapped;
    }

    /**
     * @return object
     */
    public function getWrapped()
    {
        return $this->wrapped instanceof DecoratorInterface ?
            $this->wrapped->getWrapped() : $this->wrapped;
    }

    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return $this->wrapped->$name(...$arguments);
    }

    /**
     * @param string $class
     *
     * @return bool
     */
    public function isInstanceOf(string $class): bool
    {
        return is_a($this->wrapped, $class);
    }
}
