<?php

namespace Kalibora\LabeledEnum;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @extends ArrayCollection<int|string,LabeledEnum>
 */
class LabeledEnumCollection extends ArrayCollection
{
    /**
     * @return array<int|string,mixed>
     */
    public function getEnumValues() : array
    {
        $values = [];

        foreach ($this as $key => $labeledEnum) {
            $values[$key] = $labeledEnum->getValue();
        }

        return $values;
    }

    /**
     * @return array<int|string,string>
     */
    public function getEnumLabels() : array
    {
        $labels = [];

        foreach ($this as $key => $labeledEnum) {
            $labels[$key] = $labeledEnum->getLabel();
        }

        return $labels;
    }
}
