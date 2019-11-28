<?php

namespace Kalibora\LabeledEnum;

use MyCLabs\Enum\Enum;

abstract class LabeledEnum extends Enum
{
    /**
     * @var string
     */
    private $label;

    /**
     * @param mixed $value
     */
    public function __construct($value)
    {
        parent::__construct($value);

        $labels = static::getLabels();

        if (!isset($labels[$value])) {
            throw new \LogicException('Undefined label for ' . $value);
        }

        $this->label = $labels[$value];
    }

    public function getLabel() : string
    {
        return $this->label;
    }

    public function __toString() : string
    {
        return $this->label;
    }

    /**
     * @return array<mixed,string>
     */
    abstract public static function getLabels() : array;
}
