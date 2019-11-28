<?php

namespace Kalibora\LabeledEnum;

use PHPUnit\Framework\TestCase;

class LabeledEnumTest extends TestCase
{
    public function testCreateAndValid()
    {
        $orange = Fruit::ORANGE();

        $this->assertSame(2, $orange->getValue());
        $this->assertSame('Orange', $orange->getLabel());
        $this->assertSame('Orange', (string) $orange);
    }

    public function testThrowExceptionInvalidValue()
    {
        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessageRegExp("/Value '999' is not part of the enum/");

        $unknownFruit = new Fruit(999);
    }
}
