<?php

namespace ThreeDScene\Models;

use SilverStripe\ORM\DataObject;

class ThreeDScene extends DataObject
{
    private static $table_name = 'ThreeDScene';

    private static $db = [
        'Title' => 'Varchar'
    ];

    private static $has_many = [
        'Object' => ThreeDSceneObject::class,
        'Light' => ThreeDSceneLight::class,
        'Camera' => ThreeDSceneCamera::class,
    ];
}