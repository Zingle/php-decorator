<?php

namespace ZingleCom\Decorator\Test\Model;

/**
 * Class TestService
 */
class TestService
{
    /**
     * @var string
     */
    private $testString;


    /**
     * TestService constructor.
     *
     * @param string $testString
     */
    public function __construct(string $testString)
    {
        $this->testString = $testString;
    }

    /**
     * @return string
     */
    public function getTestString(): string
    {
        return $this->testString;
    }
}
