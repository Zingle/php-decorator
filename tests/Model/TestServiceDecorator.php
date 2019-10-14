<?php

namespace ZingleCom\Decorator\Test\Model;

use ZingleCom\Decorator\AbstractDecorator;

/**
 * Class TestServiceDecorator
 *
 * @property TestService $wrapped
 *
 * @mixin TestService
 */
class TestServiceDecorator extends AbstractDecorator
{
    const FOO = 'FOO %s';


    /**
     * @return string
     */
    public function foo()
    {
        return sprintf(self::FOO, $this->wrapped->getTestString());
    }
}
