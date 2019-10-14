<?php

namespace ZingleCom\Decorator\Test;

use PascalDeVink\ShortUuid\ShortUuid;
use PHPUnit\Framework\TestCase;
use ZingleCom\Decorator\Test\Model\TestService;
use ZingleCom\Decorator\Test\Model\TestServiceDecorator;

/**
 * Class AbstractDecoratorTest
 */
class AbstractDecoratorTest extends TestCase
{
    /**
     * Test basic decorator functionality
     */
    public function testDecorator(): void
    {
        $service   = new TestService($value = ShortUuid::uuid4());
        $decorator = new TestServiceDecorator($service);

        $this->assertInstanceOf(TestService::class, $decorator->getWrapped());
        $this->assertTrue($decorator->isInstanceOf(TestService::class));
        $this->assertEquals($value, $decorator->getTestString());
        $this->assertEquals(sprintf(TestServiceDecorator::FOO, $value), $decorator->foo());
    }
}
