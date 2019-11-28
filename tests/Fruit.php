<?php

namespace Kalibora\LabeledEnum;

class Fruit extends LabeledEnum
{
    private const APPLE = 1;
    private const ORANGE = 2;
    private const BANANA = 3;

    public static function getLabels() : array
    {
        return [
            self::APPLE => 'Apple',
            self::ORANGE => 'Orange',
            self::BANANA => 'Banana',
        ];
    }
}
