<?php

namespace SabinaTalipova\ThreeDScene\Models\Shape;

use SilverStripe\ORM\DataObject;

class Geometry extends DataObject
{
    public function getType(): string
    {
        return $this->ClassName;
    }
}
