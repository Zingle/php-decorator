<?php

namespace ZingleCom\Decorator;

/**
 * Interface DecoratorInterface
 */
interface DecoratorInterface
{
    /**
     * @return object
     */
    public function getWrapped();

    /**
     * @param string $class
     *
     * @return bool
     */
    public function isInstanceOf(string $class): bool;
}
