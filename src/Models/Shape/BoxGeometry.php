<?php

namespace SabinaTalipova\ThreeDScene\Models\Shape;

class BoxGeometry extends Geometry
{
    private static $db = [
        'Width' => 'Decimal',
        'Height' => 'Decimal',
        'Depth' => 'Decimal'
    ];
}
