<?php

namespace Kalibora\LabeledEnum;

use PHPUnit\Framework\TestCase;

class LabeledEnumCollectionTest extends TestCase
{
    public function testCollection()
    {
        $fruits = Fruit::collection();

        $this->assertSame(
            [
                'APPLE' => 1,
                'ORANGE' => 2,
                'BANANA' => 3,
            ],
            $fruits->getEnumValues()
        );

        $this->assertSame(
            [
                'APPLE' => 'Apple',
                'ORANGE' => 'Orange',
                'BANANA' => 'Banana',
            ],
            $fruits->getEnumLabels()
        );
    }

    public function testToArray()
    {
        $fruits = Fruit::toArray();

        $this->assertSame(
            [
                'APPLE' => 1,
                'ORANGE' => 2,
                'BANANA' => 3,
            ],
            $fruits
        );
    }
}
